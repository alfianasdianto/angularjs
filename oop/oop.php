<?php

class Cpu {
    public function freeze()
	{
		echo "jalankan freeze.... <br>";
	}
    public function jump()
	{
		echo "jalankan jump.... <br>";
	}
    public function execute()
	{
		echo "eksekusi.... <br>";
	}
}

class Memory {
    public function load()
	{
		echo "load memory.... <br>";
	}
}

class HardDisk {
    public function read()
	{
		echo "baca harddisk.... <br>";
	}
}

class Komputer {
    private $cpu;
    private $memory;
    private $hd;

    public function __construct()
	{
        $this->cpu = new Cpu();
        $this->memory = new Memory();
        $this->hd = new HardDisk();
    }

    public function hidupkan_komputer()
	{
        $this->cpu->freeze();
        $this->memory->load();
        $this->cpu->jump();
        $this->cpu->execute();
        $this->hd->read();
    }
}

    $komputer = new Komputer();
    $komputer->hidupkan_komputer();

?>
