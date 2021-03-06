precision highp float;

//View-Space directional light
//A unit vector
uniform vec3 u_CameraSpaceDirLight;

//Diffuse texture map for the day
uniform sampler2D u_DayDiffuse;
//Ambient texture map for the night side
uniform sampler2D u_Night;
//Color map for the clouds
uniform sampler2D u_Cloud;
//Transparency map for the clouds.  Note that light areas are where clouds are NOT
//Dark areas are where clouds are present
uniform sampler2D u_CloudTrans;
//Mask of which areas of the earth have specularity
//Oceans are specular, landmasses are not
uniform sampler2D u_EarthSpec;
//Bump map
uniform sampler2D u_Bump;
uniform sampler2D u_noise;

uniform float u_time;
uniform float u_showWhich;
uniform mat4 u_InvTrans;
uniform vec3 u_CameraSpacePosLight;

varying vec3 v_Normal;              // surface normal in camera coordinates
varying vec2 v_Texcoord;
varying vec3 v_Position;            // position in camera coordinates
varying vec3 v_positionMC;          // position in model coordinates
varying vec3 waterTurb;

mat3 eastNorthUpToEyeCoordinates(vec3 positionMC, vec3 normalEC);

vec3 permute(vec3 x) {
  x = ((x*34.0)+1.0)*x;
  return x - floor(x * (1.0 / 289.0)) * 289.0;
}

float snoise(vec2 v)
  {
  const vec4 C = vec4(0.211324865405187, 0.366025403784439,  -0.577350269189626, 0.024390243902439);

  vec2 i  = floor(v + dot(v, C.yy) );
  vec2 x0 = v -   i + dot(i, C.xx);

  vec2 i1;
  i1 = (x0.x > x0.y) ? vec2(1.0, 0.0) : vec2(0.0, 1.0);

  vec4 x12 = x0.xyxy + C.xxzz;
  x12.xy -= i1;

  i = i - floor(i * (1.0 / 289.0)) * 289.0;

  vec3 p = permute( permute( i.y + vec3(0.0, i1.y, 1.0 ))
        + i.x + vec3(0.0, i1.x, 1.0 ));

  vec3 m = max(0.5 - vec3(dot(x0,x0), dot(x12.xy,x12.xy), dot(x12.zw,x12.zw)), 0.0);
  m = m*m ;
  m = m*m ;

  vec3 x = 2.0 * fract(p * C.www) - 1.0;
  vec3 h = abs(x) - 0.5;
  vec3 ox = floor(x + 0.5);
  vec3 a0 = x - ox;

  m *= inversesqrt( a0*a0 + h*h );

  vec3 g;
  g.x  = a0.x  * x0.x  + h.x  * x0.y;
  g.yz = a0.yz * x12.xz + h.yz * x12.yw;
  return 130.0 * dot(m, g);
}

vec3 getRainbow(float x)
{

    vec3 flags[7];
    flags[0]=vec3(0.0,0.0,1.0);
    flags[1]=vec3(0.0,0.99,1.0);
    flags[2]=vec3(0.0,0.99,1.0);
    flags[3]=vec3(1.0,1.0,0.0);
    flags[4]=vec3(1.0,0.51,0.0);
    flags[5]=vec3(1.0,0.0,0.0);
    flags[6]=vec3(1.0,1.0,1.0);

    x=clamp(x,0.0,0.98);
    int idx=int(floor(x/0.188));
    //int idx=0;
    float ofst, ofst2;
    if(idx==0)
    {
        ofst=x-0.0*0.188;
        ofst2=1.0*0.188-x;
        return flags[0]*(ofst2/(ofst+ofst2))+flags[1]*(ofst/(ofst+ofst2));
    }
    else if(idx==1)
    {
        ofst=x-1.0*0.188;
        ofst2=2.0*0.188-x;
        return flags[1]*(ofst2/(ofst+ofst2))+flags[2]*(ofst/(ofst+ofst2));
    }
    else if(idx==2)
    {
        ofst=x-2.0*0.188;
        ofst2=3.0*0.188-x;
        return flags[2]*(ofst2/(ofst+ofst2))+flags[3]*(ofst/(ofst+ofst2));
    }
    else if(idx==3)
    {
        ofst=x-3.0*0.188;
        ofst2=4.0*0.188-x;
        return flags[3]*(ofst2/(ofst+ofst2))+flags[4]*(ofst/(ofst+ofst2));
    }
    else if(idx==4)
    {
        ofst=x-4.0*0.188;
        ofst2=5.0*0.188-x;
        return flags[4]*(ofst2/(ofst+ofst2))+flags[5]*(ofst/(ofst+ofst2));
    }
    else if(idx==5)
    {
        ofst=x-5.0*0.188;
        ofst2=6.0*0.188-x;
        return flags[5]*(ofst2/(ofst+ofst2))+flags[6]*(ofst/(ofst+ofst2));
    }

    return vec3(1.0);
}

void main(void)
{
    // surface normal - normalized after rasterization
    vec2 upTexcoord=v_Texcoord;
    vec2 rightTexcoord=v_Texcoord;
    upTexcoord.t-=1.0/512.0;
    rightTexcoord.s+=1.0/1024.0;

    float checkDayNightnorm=dot(u_CameraSpaceDirLight, v_Normal);

    float center=texture2D(u_Bump,v_Texcoord).r;
    float theright=texture2D(u_Bump, rightTexcoord).r;
    float theUp=texture2D(u_Bump, upTexcoord).r;

    vec3 turbnormal=normalize(vec3(center-theright, center-theUp,0.2));
    vec3 normal=normalize(eastNorthUpToEyeCoordinates(v_positionMC, v_Normal)*turbnormal);


    vec2 ocean_Texcoord = v_Texcoord;
    float fragutime=u_time-10.0*float(int(u_time/10.0));
    float ocean_texcoord_noise=snoise(ocean_Texcoord*(fragutime));
    ocean_Texcoord.s-=0.00002*fragutime*ocean_texcoord_noise;
    ocean_Texcoord.t+=0.00001*fragutime*ocean_texcoord_noise;

    vec2 ocean_upTexcoord=ocean_Texcoord;
    vec2 ocean_rightTexcoord=ocean_Texcoord;
    ocean_upTexcoord.t-=1.0/512.0;
    ocean_rightTexcoord.s+=1.0/1024.0;


    float ocean_center=texture2D(u_noise,ocean_Texcoord).r;
    float ocean_theright=texture2D(u_noise, ocean_rightTexcoord).r;
    float ocean_theUp=texture2D(u_noise, ocean_upTexcoord).r;

    vec3 ocean_turbnormal=normalize(vec3(ocean_center-ocean_theright, ocean_center-ocean_theUp,3.0));
    vec3 ocean_normal=normalize(eastNorthUpToEyeCoordinates(v_positionMC, v_Normal)*ocean_turbnormal);



    vec3 oceanStatus = texture2D(u_EarthSpec, v_Texcoord).rgb;
    bool isOcean=length(oceanStatus)>0.5;

    //ray-trace to check if it is in shadow


    if(isOcean)
    {
        normal=ocean_normal;
    }
    float dotlightnorm=dot(u_CameraSpaceDirLight, normal);
    //vec3 normal = normalize(v_Normal);
    // normalized eye-to-position vector in camera coordinates
    vec3 eyeToPosition = normalize(v_Position);


    float diffuse = clamp(dotlightnorm, 0.0, 1.0);

    vec3 toReflectedLight = reflect(-u_CameraSpaceDirLight, normal);
    float specular = max(dot(toReflectedLight, -eyeToPosition), 0.0);
    specular = pow(specular, 50.0);

    float gammaCorrect = 1.0/1.2; //gamma correct by 1/1.2

    vec3 dayColor = texture2D(u_DayDiffuse, v_Texcoord).rgb;
    vec3 nightColor = texture2D(u_Night, v_Texcoord).rgb;


    vec2 v_Texcoord2=v_Texcoord;	// Cloud texture coord
    v_Texcoord2.s-=0.0005*u_time;
    vec3 cloudColor = texture2D(u_Cloud, v_Texcoord2).rgb;
    vec3 cloudTrans = texture2D(u_CloudTrans, v_Texcoord2).rgb;


    //apply gamma correction to nighttime texture
    nightColor = pow(nightColor,vec3(gammaCorrect));

            vec3 color;
            if(checkDayNightnorm>0.0)	//day
            {
                    cloudColor*=0.6*diffuse+0.8*specular;

                    if(u_showWhich>0.5)
                        dayColor=getRainbow(center*2.7);

            color = ((0.6 * diffuse) + (0.8 * specular*(isOcean?1.0:0.0))) * dayColor;

            color = mix(cloudColor, color, cloudTrans.r);

    }
    else		//night
    {
        if(u_showWhich>0.5)
            nightColor=getRainbow(center*2.7);
        color = (-dotlightnorm)*nightColor*0.5;
        cloudColor*=(1.0-cloudTrans.g)*0.2;

        color = mix(color, cloudColor,clamp(length(color),0.0,1.0));

    }

    float rimfactor=dot(v_Normal, v_Position)+1.0;
    if(rimfactor>-0.0)
    {
        color+=vec3(rimfactor/4.0, rimfactor/2.0, rimfactor*1.0);
    }


    gl_FragColor = vec4(color, 1.0);
}

mat3 eastNorthUpToEyeCoordinates(vec3 positionMC, vec3 normalEC)
{
    // normalized surface tangent in model coordinates
    vec3 tangentMC = normalize(vec3(-positionMC.z, positionMC.x, 0.0));
    // normalized surface tangent in eye coordiantes
    vec3 tangentEC = normalize(mat3(u_InvTrans) * tangentMC);
    // normalized surface bitangent in eye coordinates
    vec3 bitangentEC = normalize(cross(normalEC, tangentEC));

    return mat3(
        tangentEC.x,   tangentEC.y,   tangentEC.z,
        bitangentEC.x, bitangentEC.y, bitangentEC.z,
        normalEC.x,    normalEC.y,    normalEC.z);
}