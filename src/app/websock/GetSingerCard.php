<?php
namespace Gameapp\App\websock;

use Game\Core\AStrategy;
use Game\Core\Packet;
use Game\Lib\JokerPoker;
use Gameapp\conf\MainCmd;
use Gameapp\conf\SubCmdSys;

/**
 *  翻倍处理
 */ 
  
 class GetSingerCard extends AStrategy {
	/**
	 * 执行方法
	 */         
	public function exec() {		
		$card = JokerPoker::getOneCard();
		$data = array('card'=>$card);	
		$data = Packet::packFormat('OK', 0, $data);
		$data = Packet::packEncode($data, MainCmd::CMD_SYS, SubCmdSys::GET_SINGER_CARD_RESP);
		return $data;		    
	}
}