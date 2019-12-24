<?php
/**
 * CanaryPHPConservation (tm) Simple Conservation Managing for php (canaryphp@gmail.com)
 * Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 * @link      https://github.com/canaryphp/ CanaryPHP(tm) Project
 * @since     1.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace CanaryPHPConservation;
class Conservation{
/**
 *
 * Viewer ID (SENDER)
 *
 * @param (string)
 *
 */
public $_VIEWER;
/**
 *
 * Receiver ID
 *
 * @param (string)
 *
 */
public $_RECEIVER;
/**
 *
 * Conservation ID
 *
 * @param (string)
 *
 */
public $_CONSERVATION;
/**
 *
 * Viewer text message template
 *
 * @param (string)
 *
 */
private $_VIEWERTEXTMSG_TEMPLATE;
/**
 *
 * Viewer image message template
 *
 * @param (string)
 *
 */
private $_VIEWERIMGMSG_TEMPLATE;
/**
 *
 * Viewer video message template
 *
 * @param (string)
 *
 */
private $_VIEWERVIDEOMSG_TEMPLATE;
/**
 *
 * Viewer audio message template
 *
 * @param (string)
 *
 */
private $_VIEWERAUDIOMSG_TEMPLATE;
/**
 *
 * Viewer attachment message template
 *
 * @param (string)
 *
 */
private $_VIEWERATTACHMENTMSG_TEMPLATE;
/**
 *
 * Receiver text message template
 *
 * @param (string)
 *
 */
private $_RECEIVERTEXTMSG_TEMPLATE;
/**
 *
 * Receiver image message template
 *
 * @param (string)
 *
 */
private $_RECEIVERIMGMSG_TEMPLATE;
/**
 *
 * Receiver video message template
 *
 * @param (string)
 *
 */
private $_RECEIVERVIDEOMSG_TEMPLATE;
/**
 *
 * Receiver audio message template
 *
 * @param (string)
 *
 */
private $_RECEIVERAUDIOMSG_TEMPLATE;
/**
 *
 * Receiver attachment message template
 *
 * @param (string)
 *
 */
private $_RECEIVERATTACHMENTMSG_TEMPLATE;
/**
 *
 * No messages template
 *
 * @param (string)
 *
 */
private $_NOMSG_TEMPLATE;
/**
 *
 * No data template
 *
 * @param (string)
 *
 */
private $_NODATA_TEMPLATE;
/**
 *
 * Contacts template
 *
 * @param (string)
 *
 */
private $_CONTACTS_TEMPLATE;
/**
 *
 * Class \CanaryPHPConservation\ConservationManager() Object
 *
 * @param (obj)
 *
 */
private $conservationmanager;
/**
 *
 * Class \CanaryPHPTools\Database() Object
 *
 * @param (obj)
 *
 */
private $db;
/**
 *
 * Class \CanaryPHPFile\Canary() Object
 *
 * @param (obj)
 *
 */
private $canaryphpfile;
/**
 *
 * Construct
 *
 * @param (string | int) : $CONSERVATION_ID , (obj) : $conservationmanager \CanaryPHPConservation\ConservationManager
 *
 */
public function __construct($CONSERVATIONID = '' , \CanaryPHPConservation\ConservationManager $conservationmanager){
    $this->setConservationID($CONSERVATIONID);
    $this->conservationmanager = $conservationmanager;
    $this->db = new \CanaryPHPTools\Database(TRUE);
    $this->canaryphpfile = new \CanaryPHPFile\Canary();
}
/**
 *
 * Set Viewer
 *
 * @param (string | int) : Viewer id
 *
 */
public function setViewer($viewer_id){
    $this->_VIEWER = $viewer_id;
    return $this;
}
/**
 *
 * Set Receiver
 *
 * @param (string | int) : receiver id
 *
 */
public function setReceiver($receiver_id){
    $this->_RECEIVER = $receiver_id;
    return $this;
}
/**
 *
 * Set conservation id
 *
 * @param (string | int) : conservation id
 *
 */
public function setConservationID($conservation_id){
    $this->_CONSERVATION = $conservation_id;
    return $this;
}
/**
 *
 * Set viewer text msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setViewerTEXTMSGTemplate($template_dir){
    $this->_VIEWERTEXTMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set viewer image msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setViewerIMGMSGTemplate($template_dir){
    $this->_VIEWERIMGMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set viewer video msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setViewerVIDEOMSGTemplate($template_dir){
    $this->_VIEWERVIDEOMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set viewer audio msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setViewerAUDIOMSGTemplate($template_dir){
    $this->_VIEWERAUDIOMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set viewer attachment msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setViewerATTACHMENTMSGTemplate($template_dir){
    $this->_VIEWERATTACHMENTMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set Receiver text msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setReceiverTEXTMSGTemplate($template_dir){
    $this->_RECEIVERTEXTMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set Receiver image msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setReceiverIMGMSGTemplate($template_dir){
    $this->_RECEIVERIMGMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set Receiver video msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setReceiverVIDEOMSGTemplate($template_dir){
    $this->_RECEIVERVIDEOMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set Receiver audio msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setReceiverAUDIOMSGTemplate($template_dir){
    $this->_RECEIVERAUDIOMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set Receiver attachment msg template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setReceiverATTACHMENTMSGTemplate($template_dir){
    $this->_RECEIVERATTACHMENTMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set No data template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setNoDATATemplate($template_dir){
    $this->_NODATA_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set No message template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setNoMSGTemplate($template_dir){
    $this->_NOMSG_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Set contacts template
 *
 * @param (string) : $template_dir template directory
 *
 */
public function setContactsTemplate($template_dir){
    $this->_CONTACTS_TEMPLATE = $template_dir;
    return $this;
}
/**
 *
 * Register message in database
 *
 * @param (string) : $content = message content , $role = message role text,picture....
 *
 * @return : TRUE if success and FALSE if failed
 *
 */
public function registerMessage($content = '',$role = '1'){
    if ($this->_CONSERVATION === null OR empty($this->_CONSERVATION)) {
        $this->_ERRORS[] = "Constructor parameter #1 Required For send message";
    }
    //Conservation column
    $data[':conservation'] = $this->_CONSERVATION;
    //Creator column
    $data[':creator'] = $this->_VIEWER;
    //Created column
    $data[':created'] = date("Y-m-d H:i:s");
    //Modified Column
    $data[':modified'] = date("Y-m-d H:i:s");
    //Content column
    $data[':content'] = $content;
    //Role column
    $data[':role'] = $role;
    if($this->db->insert($this->conservationmanager->_MESSAGES_TABLENAME,$data) >0){
        return TRUE;
    }
    return FALSE;
}
/**
 * Get messages from database
 *
 * @return (string) message
 *
 */
public function getMessages(){
    $count = $this->db->select($this->conservationmanager->_CONSERVATION_TABLENAME,['where'=>[':conservation_id'=>$this->_CONSERVATION],'and'=>[':conservation_users'=>json_encode([$this->_RECEIVER,$this->_VIEWER])]]);
    $count2 = $this->db->select($this->conservationmanager->_CONSERVATION_TABLENAME,['where'=>[':conservation_id'=>$this->_CONSERVATION],'and'=>[':conservation_users'=>json_encode([$this->_VIEWER,$this->_RECEIVER])]]);
    if($count >0 OR $count2 >0){
        //VIEWER TEMPLATE
        $v_txtmsg = $this->canaryphpfile->file($this->_VIEWERTEXTMSG_TEMPLATE)->get();
        $v_audmsg = $this->canaryphpfile->file($this->_VIEWERAUDIOMSG_TEMPLATE)->get();
        $v_vidmsg = $this->canaryphpfile->file($this->_VIEWERVIDEOMSG_TEMPLATE)->get();
        $v_imgmsg = $this->canaryphpfile->file($this->_VIEWERIMGMSG_TEMPLATE)->get();
        $v_attmsg = $this->canaryphpfile->file($this->_VIEWERATTACHMENTMSG_TEMPLATE)->get();
        //receiver TEMPLATE
        $r_txtmsg = $this->canaryphpfile->file($this->_RECEIVERTEXTMSG_TEMPLATE)->get();
        $r_audmsg = $this->canaryphpfile->file($this->_RECEIVERAUDIOMSG_TEMPLATE)->get();
        $r_vidmsg = $this->canaryphpfile->file($this->_RECEIVERVIDEOMSG_TEMPLATE)->get();
        $r_imgmsg = $this->canaryphpfile->file($this->_RECEIVERIMGMSG_TEMPLATE)->get();
        $r_attmsg = $this->canaryphpfile->file($this->_RECEIVERATTACHMENTMSG_TEMPLATE)->get();
        //fetch messages
        $stmt = $this->db->query("SELECT * FROM {$this->conservationmanager->_MESSAGES_TABLENAME} WHERE conservation=:conservation ORDER BY created ASC",[':conservation'=>$this->_CONSERVATION]);
            $msg_counter = $stmt->rowCount();
            if($msg_counter >=1){
                $messages = $stmt->fetchAll();
                $all_msg = '';
                    for ($i=0; $i < count($messages) ; $i++) {
                        $msg = $messages[$i];
                        if ((string) $msg['creator'] === (string) $this->_VIEWER) {
                            switch ((string) $msg['role']) {
                                case '1':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$v_txtmsg).EOL;
                                break;
                                case '2':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$v_imgmsg).EOL;
                                break;
                                case '3':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$v_vidmsg).EOL;
                                break;
                                case '4':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$v_audmsg).EOL;
                                break;
                                case '5':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$v_attmsg).EOL;
                                break;
                            }
                        }elseif((string) $msg['creator'] === (string) $this->_RECEIVER){
                            switch ((string) $msg['role']) {
                                case '1':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$r_txtmsg).EOL;
                                break;
                                case '2':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$r_imgmsg).EOL;
                                break;
                                case '3':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$r_vidmsg).EOL;
                                break;
                                case '4':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$r_audmsg).EOL;
                                break;
                                case '5':
                                    $all_msg .= str_replace(['{ID}','{CREATOR}','{CONTENT}','{CREATED}','{MODIFIED}'],[$msg['id'],$msg['creator'],$msg['content'],$msg['created'],$msg['modified']],$r_attmsg).EOL;
                                break;
                            }
                        }
                    }
                    return $all_msg;
            }else{
                return $this->canaryphpfile->file($this->_NOMSG_TEMPLATE)->get();
            }
    }else{
        return $this->canaryphpfile->file($this->_NODATA_TEMPLATE)->get();
    }
}
/**
 *
 * Get Last message role
 *
 * @param (string) : $conservation_id : Conservation id
 *
 */
public function getSubMessage($conservation_id = ''){
    $sql = "SELECT * FROM {$this->conservationmanager->_MESSAGES_TABLENAME} WHERE conservation=:conservation ORDER BY created DESC";
    $stmt = $this->db->query($sql,[':conservation'=>$conservation_id]);
    if($stmt->rowCount() >0){
            $res = $stmt->fetch(\PDO::FETCH_ASSOC);
            switch ($res['role']){
                case '1':
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent a message' : 'He sent you message' ;
                break;
                case '2':
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent a picture' : 'He sent you picture' ;
                break;
                case '3':
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent a video' : 'He sent you video' ;
                break;
                case '4':
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent a voice message' : 'He sent you voice message' ;
                break;
                case '5':
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent attachment' : 'He sent you attachment' ;
                break;
                default:
                    $submsg = ($this->_VIEWER === $res['creator']) ? 'You sent a message' : 'He sent you message' ;
                break;
            }
            return $submsg;
        }
    $stmt = null;
}
/**
 *
 * Update message
 *
 * @param (string) $msg_id = message id
 *
 * @return : TRUE if success and FALSE if failed
 *
 */
public function updateMessage($msg_id = '',$new_content = ''){
    $message_info = $this->db->fetch($this->conservationmanager->_MESSAGES_TABLENAME,['where'=>[':conservation'=>$this->_CONSERVATION],'and'=>[':id'=>$msg_id]],[],true);
    $changelog = json_decode($message_info["message_changeslog"],TRUE);
    $changelog['updates'][date("Y-m-d H:i:s")] = "Update message content from '{$message_info["content"]}'";
    $data[":message_changeslog"] = json_encode($changelog);
    $data[':modified'] = date("Y-m-d H:i:s");
    $data[':content'] = $new_content;
    $data['where'] = [':conservation'=>$this->_CONSERVATION];
    $data['and'] = [':id'=>$msg_id];
    if($this->db->update($this->conservationmanager->_MESSAGES_TABLENAME,$data) >0){
        return TRUE;
    }
    return FALSE;
}

/**
 *
 * Delete message
 *
 * @param (string) : $msg_id = message id
 *
 * @return : TRUE if success and FALSE if failed
 */
public function deleteMessage($msg_id = ''){
    if($this->db->delete($this->conservationmanager->_MESSAGES_TABLENAME,['where'=>[':conservation'=>$this->_CONSERVATION],'and'=>[':id'=>$msg_id]]) >0){
        return TRUE;
    }
    return FALSE;
}
/**
 *
 * Check user authenficated
 *
 * @return (bool) : TRUE = if allow , FALSE = if deny
 *
 */
public function Auth(){
    $conservation = $this->db->fetch($this->conservationmanager->_CONSERVATION_TABLENAME,['where'=>[':conservation_id'=>$this->_CONSERVATION]],[],TRUE);
    $conservation_users = (is_array(json_decode($conservation['conservation_users']))) ? json_decode($conservation['conservation_users']) : [] ;
    return in_array($this->_VIEWER,$conservation_users);
}
/**
 *
 * Register Conservation in database
 *
 * @param (string) : $title = conservation title , $subject = conservation subject if exist
 *
 * @return (bool) : TRUE if success and FALSE if failed
 *
 */
public function registerConservation($title = '',$subject = ''){
    if(!empty($title)){
        $data[':conservation_title'] = $title;
    }
    if(!empty($subject)){
        $data[':conservation_subject'] = $subject;
    }
    for($i=0;$i<=100;$i++){
        $conservation_id = \CanaryPHPTools\TokenGenerator::generate(30,\CanaryPHPTools\TokenGenerator::NUMS);
        if($this->db->select($this->conservationmanager->_CONSERVATION_TABLENAME,['where'=>[':conservation_id'=>$conservation_id]]) >0){
            continue;
        }else{
            break;
        }
    }
    $data[':conservation_id'] = $conservation_id;
    $data[':conservation_users'] = json_encode([$this->_VIEWER,$this->_RECEIVER]);
    $data[':conservation_key'] = \CanaryPHPTools\TokenGenerator::generate(16,\CanaryPHPTools\TokenGenerator::MIX);
    $data[':created'] = date("Y-m-d H:i:s");
    $data[':modified'] = date("Y-m-d H:i:s");
    if($this->db->insert($this->conservationmanager->_CONSERVATION_TABLENAME,$data) >0){
        return TRUE;
    }
    return FALSE;
}
/**
 *
 * Get viewer opened conservation
 *
 * @param (string) : $status conservation status
 *
 * @return (string) : available conservations
 *
 */
public function getConservations($status = '1'){
    $sql = "SELECT * FROM {$this->conservationmanager->_CONSERVATION_TABLENAME} WHERE conservation_users LIKE'%$this->_VIEWER%' AND conservation_status='{$status}' ORDER BY created DESC";
    $stmt = $this->db->query($sql);
    if($stmt->rowCount()){
            $Allcontacts = $stmt->fetchAll();
            //filter contacts
                for ($i=0; $i < count($Allcontacts) ; $i++) {
                    //conservation_users
                        $users = json_decode($Allcontacts[$i]['conservation_users']);
                            if(in_array($this->_VIEWER,$users)){
                                $filtred_contacts[] = $Allcontacts[$i];
                            }
                }
                $contacts_template = $this->canaryphpfile->file($this->_CONTACTS_TEMPLATE)->get();
                $contacts = '';
                for ($i=0; $i < count($filtred_contacts) ; $i++) {
                    $contacts .= str_replace(['{CONSERVATION_ID}','{CONSERVATION_TITLE}','{CONSERVATION_STATUS}','{SUB_MESSAGE}','{CREATED}','{MODIFIED}'],[$filtred_contacts[$i]['conservation_id'],$filtred_contacts[$i]['conservation_title'],$filtred_contacts[$i]['conservation_status'],$this->getSubMessage($filtred_contacts[$i]['conservation_id']),$filtred_contacts[$i]['created'],$filtred_contacts[$i]['modified']],$contacts_template);
                }
            return $contacts;
    }
    $stmt = null;
}
/**
 *
 * Update an Conservation
 *
 * @param (array) $data
 *
 */
public function updateConservation($conservation_id = '',$changelog_message = '',$data = []){
    $conservation_info = $this->db->fetch($this->conservationmanager->_CONSERVATION_TABLENAME,['where'=>[':conservation_id'=>$conservation_id]],[],true);
    $changelog = json_decode($conservation_info["conservation_changeslog"],TRUE);
    $changelog['updates'][date("Y-m-d H:i:s")] = $changelog_message;
    $data[":conservation_changeslog"] = json_encode($changelog);
    $data[':modified'] = date("Y-m-d H:i:s");
    $data['where'] = [':conservation_id'=>$conservation_id];
    if($this->db->update($this->conservationmanager->_CONSERVATION_TABLENAME,$data) >0){
        return TRUE;
    }
    return FALSE;
}
/**
 *
 * Hide Conservation
 *
 * @return (bool) : TRUE if success and FALSE if failed
 *
 */
public function hideConservation($conservation_id = ''){
    return $this->updateConservation($conservation_id,'Conservation status changed to \'hidden\'',[':conservation_status'=>'0']);
}
/**
 *
 * Delete an Conservation
 *
 * @param (array) $data
 *
 * @return (bool) : TRUE if success and FALSE if failed
 *
 */
public function deleteConservation($conservation_id = ''){
    if($this->db->delete($this->conservationmanager->_CONSERVATION_TABLENAME,['and'=>[':conservation_status'=>'0'],'where'=>[':conservation_id'=>$conservation_id]]) >0){
        return TRUE;
    }
    return FALSE;
}
}
