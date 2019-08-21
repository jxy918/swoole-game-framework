<?php
namespace Gameapp\App\websock;

use Game\Core\AStrategy;
use Game\Core\Packet;
use Game\Lib\JokerPoker;
use Gameapp\conf\MainCmd;
use Gameapp\conf\SubCmdSys;

/**
 *  获取卡牌信息
 */ 
  
 class GetCard extends AStrategy {
    /**
     * 执行方法
     */         
    public function exec() {		
        $data = JokerPoker::getFiveCard();    
        $data = Packet::packFormat('OK', 0, $data);
        $data = Packet::packEncode($data, MainCmd::CMD_SYS, SubCmdSys::GET_CARD_RESP);
		return $data;  
    }
}