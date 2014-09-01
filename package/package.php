<?php

class Package {
	public function __construct($file, $systemRoot, $documentRoot, $assetsDomain = 'assets.guanyuhe.com') {
		$this->systemRoot = $systemRoot;
		$this->documentRoot = $documentRoot;
		$this->assetsDomain = $assetsDomain;
		$this->file = $file;
	}

	public function getCssList() {
		$files = array();
		return $this->getList('css', $files);
	}

	public function getJsList() {
		$files = array();
		return $this->getList('js', $files);
	}

	public function getFsList() {
		$files = array();
		return $this->getList('fs', $files);
	}

	public function getVsList() {
		$files = array();
		return $this->getList('vs', $files);
	}


	public function getCssHtml() {
        $list = $this->getCssList();
        $html = '';
        foreach ($list as $file) {
            $path = $this->makePath("//$this->assetsDomain", $file);
            $html .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"$path\" />\n";
        }
		return $html;
	}

	public function getJsHtml() {
        $list = $this->getJsList();
        $html = '';
        foreach ($list as $file) {
            $path = $this->makePath("//$this->assetsDomain", $file);
            $html .= "<script type=\"text/javascript\" src=\"$path\"></script>\n";
        }
		return $html;
	}

	public function getFsHtml() {
        $list = $this->getFsList();
        $html = '';
        foreach ($list as $file) {
            $path = "../". $file;
            $id = $file;
            $html .= "<script id=\"fs\" type=\"x-shader/x-vertex\" src=\"$path\">";
            $html .= file_get_contents($path);
            $html .= "</script>\n";
        }
		return $html;
	}

	public function getVsHtml() {
        $list = $this->getVsList();
        $html = '';
        foreach ($list as $file) {
            //$path = $this->makePath("//$this->assetsDomain", $file);
            $path = "../". $file;
            $id = $file;
            $html .= "<script id=\"vs\" type=\"x-shader/x-fragment\" src=\"$path\">";
            $html .= file_get_contents($path);
            $html .= "</script>\n";
        }
		return $html;
	}


	private function getList($extension, &$files) {
		$suffix = '.' . strtolower($extension);
		$path = $this->makePath($this->systemRoot,  $this->file);
		$json = file_get_contents($path);
		$spec = json_decode($json, true);
		$list = array();
		if (isset($spec['dependencies'])) {
			foreach ($spec['dependencies'] as $dependency) {
				$package = new Package($dependency, $this->systemRoot, $this->documentRoot, $this->assetsDomain);
				$list = array_merge($list, $package->getList($extension, $files));
			}
		}
		if (isset($spec['files'])) {
			foreach ($spec['files'] as $file) {
				if (strtolower(substr($file, -strlen($suffix))) == $suffix && !isset($files[$file])) {
					$list[] = $file;
					$files[$file] = true;
				}
			}
		}
		return $list;
	}

	private function makePath($start, $end) {
		$numSlashes = 0;
		if (substr($start, -1) == '/') {
			$humSlashes++;
		}
		if (substr($end, 0, 1) == '/') {
			$numSlashes++;
		}
		if ($numSlashes < 1) {
			$start .= '/';
		}
		else if ($numSlashes > 1) {
			$end = substr($end, 1);
		}
		return $start . $end;
	}
}

?>