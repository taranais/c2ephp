<?php

require_once(dirname(__FILE__).'/PrayBlock.php');
class GENEBlock extends PrayBlock {
	public function GENEBlock($prayfile,$name,$content,$flags) {
		parent::PrayBlock($prayfile,$name,$content,$flags,PRAY_BLOCK_GENE);

	}
	public function CompileBlockData() {
		return $this->GetData();
	}
	protected function DecompileBlockData() {
		throw new Exception('I don\'t know how to decompile a GENE.');
	}
}
?>