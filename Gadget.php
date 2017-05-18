<?php namespace VnsModules\VideoGadget;

class Gadget
{
    public function register($ids) {
        $datas = [
            'videos' => explode(',', $ids)
        ];
        return view('VnsModules\VideoGadget::gadget', $datas);
    }
}