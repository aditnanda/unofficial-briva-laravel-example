<?php

namespace App\Http\Livewire;

use AditNanda\UnofficialBriva\Briva;
use Livewire\Component;

class DevBriIndex extends Component
{
    public $custCode, $ammount, $nama, $keterangan, $expiredDate, $result, $start_date, $end_date,$start_time, $end_time, $statusBayar;

    public function getVa()
    {
        $validatedData = $this->validate([
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaRead($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function getStatusVa()
    {
        $validatedData = $this->validate([
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaReadStatus($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function buatVa()
    {
        $validatedData = $this->validate([
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaCreate($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function updateVa()
    {
        $validatedData = $this->validate([
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaUpdate($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function updateStatusVa()
    {
        $validatedData = $this->validate([
            'statusBayar' => 'max:100',
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaUpdateStatus($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function deleteVa()
    {
        $validatedData = $this->validate([
            'custCode' => 'max:100',
            'ammount' => 'max:100',
            'nama' => 'max:100',
            'keterangan' => 'max:100',
            'expiredDate' => 'max:100'
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaDelete($validatedData);
        $this->emit('desUpdate',json_encode($this->result));

    }

    public function getReport()
    {
        $validatedData = $this->validate([
            'start_date' => 'max:100',
            'end_date' => 'max:100',
        ]);


        $bri = new Briva();
    

        $this->result = $bri->BrivaGetReport($validatedData);
        $this->emit('desUpdate',json_encode($this->result));


    }

    public function getReportTime()
    {
        $validatedData = $this->validate([
            'start_date' => 'max:100',
            'end_date' => 'max:100',
            'start_time' => 'max:100',
            'end_time' => 'max:100',
        ]);

        $bri = new Briva();
    

        $this->result = $bri->BrivaGetReportTime($validatedData);
        $this->emit('desUpdate',json_encode($this->result));


    }

    public function render()
    {

        return view('livewire.dev-bri-index');
    }
}
