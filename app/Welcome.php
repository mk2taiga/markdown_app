<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown;

class Welcome extends Model
{
    protected $fillable = [
        'title', 'body',
    ];
    
    public function parse() {
        //newでインスタンスを作る
        $parser = new Markdown();
        //bodyをパースする
        return $parser->parse($this->body);
    }
    
    public function getMarkBodyAttribute() {
        return $this->parse();
    }
}
