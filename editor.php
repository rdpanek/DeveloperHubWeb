<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.5.1
*/error_reporting(6135);$vb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($vb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Md=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Md)$$V=$Md;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.js .column{position:absolute;background:#ddf;padding:.3em 1ex .3em 0;margin-top:-.3em;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}.icon{width:18px;height:18px;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#dbs{overflow:hidden;}#logins,#tables{overflow:auto;}#logins a,#tables a{background:#fff;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}function
cookie(assign,days){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}function
verifyVersion(){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}function
selectValue(select){var
selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}function
parentTag(el,tag){var
re=new
RegExp('^'+tag+'$','i');while(!re.test(el.tagName)){el=el.parentNode;}return el;}function
trCheck(el){var
tr=parentTag(el,'tr');tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}function
tableCheck(){var
tables=document.getElementsByTagName('table');for(var
i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var
trs=tables[i].getElementsByTagName('tr');for(var
j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}function
formUncheck(id){var
el=document.getElementById(id);el.checked=false;trCheck(el);}function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return checked;}function
tableClick(event){var
click=(!window.getSelection||getSelection().isCollapsed);var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){if(el.type!='checkbox'){return;}checkboxClick(event,el);click=false;}el=el.parentNode;}el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}trCheck(el);}var
lastChecked;function
checkboxClick(event,el){if(!el.name){return;}if(event.shiftKey&&(!lastChecked||lastChecked.name==el.name)){var
checked=(lastChecked?lastChecked.checked:true);var
inputs=parentTag(el,'table').getElementsByTagName('input');var
checking=!lastChecked;for(var
i=0;i<inputs.length;i++){var
input=inputs[i];if(input.name===el.name){if(checking){input.checked=checked;trCheck(input);}if(input===el||input===lastChecked){if(checking){break;}checking=true;}}}}else{lastChecked=el;}}function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}function
nodePosition(el){var
pos=0;while(el=el.previousSibling){pos++;}return pos;}function
pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');location.href=href;}}function
menuOver(el){el.style.overflow='visible';}function
menuOut(el){el.style.overflow='auto';}function
selectAddRow(field){field.onchange=function(){selectFieldChange(field.form);};field.onchange();var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);}function
columnMouse(el,className){var
spans=el.getElementsByTagName('span');for(var
i=0;i<spans.length;i++){if(/column/.test(spans[i].className)){spans[i].className='column'+(className||'');}}}function
selectSearch(name){var
el=document.getElementById('fieldset-search');el.className='';var
divs=el.getElementsByTagName('div');for(var
i=0;i<divs.length;i++){var
div=divs[i];if(/select/i.test(div.firstChild.tagName)&&selectValue(div.firstChild)==name){break;}}if(i==divs.length){div.firstChild.value=name;div.firstChild.onchange();}div.lastChild.focus();}function
bodyKeydown(event,button){var
target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(button){target.form[button].click();}else{target.form.submit();}return false;}return true;}function
editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var
target=event.target||event.srcElement;var
sibling=(event.keyCode==40?'nextSibling':'previousSibling');var
el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}return false;}if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}return true;}function
functionChange(select){var
input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}input.removeAttribute('maxlength');}else
if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}function
ajax(url,callback,data){var
request=(window.XMLHttpRequest?new
XMLHttpRequest():(window.ActiveXObject?new
ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}return request;}function
ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var
data=eval('('+request.responseText+')');for(var
key
in
data){setHtml(key,data[key]);}}});}function
selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}var
original=td.innerHTML;var
input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var
pos=event.rangeOffset;var
value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}function
eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}function
bodyLoad(version){}function
selectFieldChange(form){}function
whisperClick(event,field){var
el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';return false;}}function
whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var
a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Rb){$dc=substr($Rb,-1);return
str_replace($dc.$dc,$dc,substr($Rb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Pc,$vb=false){if(get_magic_quotes_gpc()){while(list($t,$V)=each($Pc)){foreach($V
as$Zb=>$U){unset($Pc[$t][$Zb]);if(is_array($U)){$Pc[$t][stripslashes($Zb)]=$U;$Pc[]=&$Pc[$t][stripslashes($Zb)];}else$Pc[$t][stripslashes($Zb)]=($vb?$U:stripslashes($U));}}}}function
bracket_escape($Rb,$qa=false){static$Cd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Rb,($qa?array_flip($Cd):$Cd));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($A,$W,$za,$bc="",$zc="",$Yb=false){static$p=0;$p++;$I="<input type='checkbox' name='$A' value='".h($W)."'".($za?" checked":"").($zc?' onclick="'.h($zc).'"':'').($Yb?" class='jsonly'":"")." id='checkbox-$p'>";return($bc!=""?"<label for='checkbox-$p'>$I".h($bc)."</label>":$I);}function
optionlist($Cc,$dd=null,$Rd=false){$I="";foreach($Cc
as$Zb=>$U){$Dc=array($Zb=>$U);if(is_array($U)){$I.='<optgroup label="'.h($Zb).'">';$Dc=$U;}foreach($Dc
as$t=>$V)$I.='<option'.($Rd||is_string($t)?' value="'.h($t).'"':'').(($Rd||is_string($t)?(string)$t:$V)===$dd?' selected':'').'>'.h($V);if(is_array($U))$I.='</optgroup>';}return$I;}function
html_select($A,$Cc,$W="",$yc=true){if($yc)return"<select name='".h($A)."'".(is_string($yc)?' onchange="'.h($yc).'"':"").">".optionlist($Cc,$W)."</select>";$I="";foreach($Cc
as$t=>$V)$I.="<label><input type='radio' name='".h($A)."' value='".h($t)."'".($t==$W?" checked":"").">".h($V)."</label>";return$I;}function
confirm($Ja=""){return" onclick=\"return confirm('".'Opravdu?'.($Ja?" (' + $Ja + ')":"")."');\"";}function
print_fieldset($p,$fc,$Ud=false,$zc=""){echo"<fieldset><legend><a href='#fieldset-$p' onclick=\"".h($zc)."return !toggle('fieldset-$p');\">$fc</a></legend><div id='fieldset-$p'".($Ud?"":" class='hidden'").">\n";}function
bold($va){return($va?" class='active'":"");}function
odd($I=' class="odd"'){static$o=0;if(!$I)$o=-1;return($o++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($t,$V=null){static$wb=true;if($wb)echo"{";if($t!=""){echo($wb?"":",")."\n\t\"".addcslashes($t,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$wb=false;}else{echo"\n}\n";$wb=true;}}function
ini_bool($Vb){$V=ini_get($Vb);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$g;return$g->quote($O);}function
get_vals($G,$e=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$e];}return$I;}function
get_key_vals($G,$Ia=null){global$g;if(!is_object($Ia))$Ia=$g;$I=array();$H=$Ia->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$Ia=null,$i="<p class='error'>"){global$g;$Ha=(is_object($Ia)?$Ia:$g);$I=array();$H=$Ha->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($Ia)&&$i&&defined("PAGE_HEADER"))echo$i.error()."\n";return$I;}function
unique_array($J,$r){foreach($r
as$q){if(ereg("PRIMARY|UNIQUE",$q["type"])){$I=array();foreach($q["columns"]as$t){if(!isset($J[$t]))continue
2;$I[$t]=$J[$t];}return$I;}}$I=array();foreach($J
as$t=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$t))$I[$t]=$V;}return$I;}function
where($X){global$s;$I=array();foreach((array)$X["where"]as$t=>$V)$I[]=idf_escape(bracket_escape($t,1)).(($s=="sql"&&ereg('\\.',$V))||$s=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".exact_value($V));foreach((array)$X["null"]as$t)$I[]=idf_escape($t)." IS NULL";return
implode(" AND ",$I);}function
where_check($V){parse_str($V,$ya);remove_slashes(array(&$ya));return
where($ya);}function
where_link($o,$e,$W,$Ac="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($e)."&where%5B$o%5D%5Bop%5D=".urlencode(($W!==null?$Ac:"IS NULL"))."&where%5B$o%5D%5Bval%5D=".urlencode($W);}function
cookie($A,$W){global$aa;$Hc=array($A,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Hc[]=true;return
call_user_func_array('setcookie',$Hc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($t){return$_SESSION[$t][DRIVER][SERVER][$_GET["username"]];}function
set_session($t,$V){$_SESSION[$t][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($Xa,$M,$T,$Qa=null){global$Ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ya))."|username|".($Qa!==null?"db|":"").session_name()),$x);return"$x[1]?".(sid()?SID."&":"").($Xa!="server"||$M!=""?urlencode($Xa)."=".urlencode($M)."&":"")."username=".urlencode($T).($Qa!=""?"&db=".urlencode($Qa):"").($x[2]?"&$x[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($w,$z=null){if($z!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($w!==null?$w:$_SERVER["REQUEST_URI"]))][]=$z;}if($w!==null){if($w=="")$w=".";header("Location: $w");exit;}}function
query_redirect($G,$w,$z,$Uc=true,$ob=true,$rb=false){global$g,$i,$b;if($ob)$rb=!$g->query($G);$jd="";if($G)$jd=$b->messageQuery("$G;");if($rb){$i=error().$jd;return
false;}if($Uc)redirect($w,$z.$jd);return
true;}function
queries($G=null){global$g;static$Sc=array();if($G===null)return
implode(";\n",$Sc);$Sc[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$g->query($G);}function
apply_queries($G,$ud,$kb='table'){foreach($ud
as$Q){if(!queries("$G ".$kb($Q)))return
false;}return
true;}function
queries_redirect($w,$z,$Uc){return
query_redirect(queries(),$w,$z,$Uc,false,!$Uc);}function
remove_from_uri($Gc=""){return
substr(preg_replace("~(?<=[?&])($Gc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Na){return" ".($D==$Na?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($t,$Ra=false){$l=$_FILES[$t];if(!$l||$l["error"])return$l["error"];$I=file_get_contents($Ra&&ereg('\\.gz$',$l["name"])?"compress.zlib://$l[tmp_name]":($Ra&&ereg('\\.bz2$',$l["name"])?"compress.bzip2://$l[tmp_name]":$l["tmp_name"]));if($Ra){$kd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$kd,$Vc))$I=iconv("utf-16","utf-8",$I);elseif($kd=="\xEF\xBB\xBF")$I=substr($I,3);}return$I;}function
upload_error($i){$mc=($i==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($i?'Nepodařilo se nahrát soubor.'.($mc?" ".sprintf('Maximální povolená velikost souboru je %sB.',$mc):""):'Soubor neexistuje.');}function
repeat_pattern($F,$gc){return
str_repeat("$F{0,65535}",$gc/65535)."$F{0,".($gc
%
65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$gc=80,$qd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$gc).")($)?)u",$O,$x))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$gc).")($)?)",$O,$x);return
h($x[1]).$qd.(isset($x[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Pc,$Tb=array()){while(list($t,$V)=each($Pc)){if(is_array($V)){foreach($V
as$Zb=>$U)$Pc[$t."[$Zb]"]=$U;}elseif(!in_array($t,$Tb))echo'<input type="hidden" name="'.h($t).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$Ab){foreach($Ab["source"]as$V)$I[$V][]=$Ab;}return$I;}function
enum_input($Fd,$c,$j,$W,$gb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$y);$I=($gb!==null?"<label><input type='$Fd'$c value='$gb'".((is_array($W)?in_array($gb,$W):$W===0)?" checked":"")."><i>".'prázdné'."</i></label>":"");foreach($y[1]as$o=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?$W==$o+1:(is_array($W)?in_array($o+1,$W):$W===$V));$I.=" <label><input type='$Fd'$c value='".($o+1)."'".($za?' checked':'').'>'.h($b->editVal($V,$j)).'</label>';}return$I;}function
input($j,$W,$m){global$Hd,$b,$s;$A=h(bracket_escape($j["field"]));echo"<td class='function'>";$Yc=($s=="mssql"&&$j["auto_increment"]);if($Yc&&!$_POST["save"])$m=null;$Hb=(isset($_GET["select"])||$Yc?array("orig"=>'původní'):array())+$b->editFunctions($j);$c=" name='fields[$A]'";if($j["type"]=="enum")echo
nbsp($Hb[""])."<td>".$b->editInput($_GET["edit"],$j,$c,$W);else{$wb=0;foreach($Hb
as$t=>$V){if($t===""||!$V)break;$wb++;}$yc=($wb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($j["field"])))."]']; if ($wb > f.selectedIndex) f.selectedIndex = $wb;\"":"");$c.=$yc;echo(count($Hb)>1?html_select("function[$A]",$Hb,$m===null||in_array($m,$Hb)||isset($Hb[$m])?$m:"","functionChange(this);"):nbsp(reset($Hb))).'<td>';$Xb=$b->editInput($_GET["edit"],$j,$c,$W);if($Xb!="")echo$Xb;elseif($j["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$y);foreach($y[1]as$o=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?($W>>$o)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$A][$o]' value='".(1<<$o)."'".($za?' checked':'')."$yc>".h($b->editVal($V,$j)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$yc>";elseif(ereg('text|lob',$j["type"]))echo"<textarea ".($s!="sqlite"||ereg("\n",$W)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$c>".h($W).'</textarea>';else{$nc=(!ereg('int',$j["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$j["length"],$x)?((ereg("binary",$j["type"])?2:1)*$x[1]+($x[3]?1:0)+($x[2]&&!$j["unsigned"]?1:0)):($Hd[$j["type"]]?$Hd[$j["type"]]+($j["unsigned"]?0:1):0));echo"<input value='".h($W)."'".($nc?" maxlength='$nc'":"").(ereg('char|binary',$j["type"])&&$nc>20?" size='40'":"")."$c>";}}}function
process_input($j){global$b;$Rb=bracket_escape($j["field"]);$m=$_POST["function"][$Rb];$W=$_POST["fields"][$Rb];if($j["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($j["auto_increment"]&&$W=="")return
null;if($m=="orig")return($j["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($j["field"]):false);if($m=="NULL")return"NULL";if($j["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads")){$l=get_file("fields-$Rb");if(!is_string($l))return
false;return
q($l);}return$b->processInput($j,$W,$m);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Db=false;foreach(table_status()as$Q=>$R){$A=$b->tableName($R);if(isset($R["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if($H->fetch_row()){if(!$Db){echo"<ul>\n";$Db=true;}echo"<li><a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n";}}}echo($Db?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_headers($Qb,$qc=false){global$b;$I=$b->dumpHeaders($Qb,$qc);$Fc=$_POST["output"];if($Fc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Qb).".$I".($Fc!="file"&&!ereg('[^0-9a-z]',$Fc)?".$Fc":""));session_write_close();return$I;}function
dump_csv($J){foreach($J
as$t=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$J[$t]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($m,$e){return($m?($m=="unixepoch"?"DATETIME($e, '$m')":($m=="count distinct"?"COUNT(DISTINCT ":strtoupper("$m("))."$e)"):$e);}function
password_file(){$Va=ini_get("upload_tmp_dir");if(!$Va){if(function_exists('sys_get_temp_dir'))$Va=sys_get_temp_dir();else{$tb=@tempnam("","");if(!$tb)return
false;$Va=dirname($tb);unlink($tb);}}$tb="$Va/adminer.key";$I=@file_get_contents($tb);if($I)return$I;$Fb=@fopen($tb,"w");if($Fb){$I=md5(uniqid(mt_rand(),true));fwrite($Fb,$I);fclose($Fb);}return$I;}function
is_mail($db){$ma='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$ma+(\\.$ma+)*@($Wa?\\.)+$Wa";return
preg_match("(^$F(,\\s*$F)*\$)i",$db);}function
is_url($O){$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Wa?\\.)+$Wa(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$x)?strtolower($x[1]):"");}global$b,$g,$Ya,$bb,$ib,$i,$Hb,$Jb,$aa,$Wb,$s,$ba,$cc,$xc,$nd,$Bd,$Ed,$Hd,$Od,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Hc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Hc[]=true;call_user_func_array('session_set_cookie_params',$Hc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$vb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($Dd,$uc){$Lc=($uc==1?0:($uc&&$uc<5?1:2));$Dd=str_replace("%d","%s",$Dd[$Lc]);$uc=number_format($uc,0,".",' ');return
sprintf($Dd,$uc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$Lc=array_search("",$b->operators);if($Lc!==false)unset($b->operators[$Lc]);}function
dsn($Za,$T,$E,$nb='auth_error'){set_exception_handler($nb);parent::__construct($Za,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Id=false){$H=parent::query($G);$this->error="";if(!$H){$jb=$this->errorInfo();$this->error=$jb[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H)$H=$this->_result;if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$j=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$j];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$Ya=array();$Ya=array("server"=>"MySQL")+$Ya;if(!defined("DRIVER")){$Mc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Ob,$Kc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Ob:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Kc)?$Kc:ini_get("mysqli.default_port")),(!is_numeric($Kc)?$Kc:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$j=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$j];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Oa){return
mysql_select_db($Oa,$this->_link);}function
query($G,$Id=false){$H=@($Id?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$j=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$j);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$T,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$T,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($Oa){return$this->query("USE ".idf_escape($Oa));}function
query($G,$Id=false){$this->setAttribute(1000,!$Id);return
parent::query($G,$Id);}}}function
idf_escape($Rb){return"`".str_replace("`","``",$Rb)."`";}function
table($Rb){return
idf_escape($Rb);}function
connect(){global$b;$g=new
Min_DB;$Ma=$b->credentials();if($g->connect($Ma[0],$Ma[1],$Ma[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($ad=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$ad;return$I;}function
get_databases($xb=true){global$g;$I=&get_session("dbs");if($I===null){if($xb){restart_session();ob_flush();flush();}$I=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$X,$u,$vc=0,$fd=" "){return" $G$X".($u!==null?$fd."LIMIT $u".($vc?" OFFSET $vc":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($Qa,$Ca){global$g;$I=null;$Ka=$g->result("SHOW CREATE DATABASE ".idf_escape($Qa),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ka,$x))$I=$x[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ka,$x))$I=$Ca[$x[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Pa){$I=array();foreach($Pa
as$Qa)$I[$Qa]=count(get_vals("SHOW TABLES IN ".idf_escape($Qa)));return$I;}function
table_status($A=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Rows"]))$J["Comment"]="";if($A!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$x);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$x[1],"length"=>$x[2],"unsigned"=>ltrim($x[3].$x[4]),"default"=>($J["Default"]!=""||ereg("char",$x[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$x)?$x[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$Ia=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$Ia)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$g,$xc;static$F='`(?:[^`]|``)+`';$I=array();$La=$g->result("SHOW CREATE TABLE ".table($Q),1);if($La){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($xc))?(?: ON UPDATE ($xc))?~",$La,$y,PREG_SET_ORDER);foreach($y
as$x){preg_match_all("~$F~",$x[2],$id);preg_match_all("~$F~",$x[5],$S);$I[idf_unescape($x[1])]=array("db"=>idf_unescape($x[4]!=""?$x[3]:$x[4]),"table"=>idf_unescape($x[4]!=""?$x[4]:$x[3]),"source"=>array_map('idf_unescape',$id[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>($x[6]?$x[6]:"RESTRICT"),"on_update"=>($x[7]?$x[7]:"RESTRICT"),);}}return$I;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$t=>$V)asort($I[$t]);return$I;}function
information_schema($Qa){global$g;return($g->server_info>=5&&$Qa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$Vc))return$Vc[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($Qa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($Qa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($Pa){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Pa,'idf_escape');}function
rename_database($A,$Ba){if(create_database($A,$Ba)){$Wc=array();foreach(tables_list()as$Q=>$Fd)$Wc[]=table($Q)." TO ".idf_escape($A).".".table($Q);if(!$Wc||queries("RENAME TABLE ".implode(", ",$Wc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$pa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$q){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$q["columns"],true)){$pa="";break;}if($q["type"]=="PRIMARY")$pa=" UNIQUE";}}return" AUTO_INCREMENT$pa";}function
alter_table($Q,$A,$k,$yb,$Fa,$hb,$Ba,$oa,$Ic){$la=array();foreach($k
as$j)$la[]=($j[1]?($Q!=""?($j[0]!=""?"CHANGE ".idf_escape($j[0]):"ADD"):" ")." ".implode($j[1]).($Q!=""?$j[2]:""):"DROP ".idf_escape($j[0]));$la=array_merge($la,$yb);$ld="COMMENT=".q($Fa).($hb?" ENGINE=".q($hb):"").($Ba?" COLLATE ".q($Ba):"").($oa!=""?" AUTO_INCREMENT=$oa":"").$Ic;if($Q=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$la)."\n) $ld");if($Q!=$A)$la[]="RENAME TO ".table($A);$la[]=$ld;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$t=>$V)$la[$t]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($ud){return
apply_queries("TRUNCATE TABLE",$ud);}function
drop_views($Td){return
queries("DROP VIEW ".implode(", ",array_map('table',$Td)));}function
drop_tables($ud){return
queries("DROP TABLE ".implode(", ",array_map('table',$ud)));}function
move_tables($ud,$Td,$S){$Wc=array();foreach(array_merge($ud,$Td)as$Q)$Wc[]=table($Q)." TO ".idf_escape($S).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Wc));}function
copy_tables($ud,$Td,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ud
as$Q){$A=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($Q))||!queries("INSERT INTO $A SELECT * FROM ".table($Q)))return
false;}foreach($Td
as$Q){$A=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));$Sd=view($Q);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $Sd[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$Fd){global$g,$ib,$Wb,$Hd;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Gd="((".implode("|",array_merge(array_keys($Hd),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Fd=="FUNCTION"?"":$Wb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Gd";$Ka=$g->result("SHOW CREATE $Fd ".idf_escape($A),2);preg_match("~\\(((?:$F\\s*,?)*)\\)\\s*".($Fd=="FUNCTION"?"RETURNS\\s+$Gd\\s+":"")."(.*)~is",$Ka,$x);$k=array();preg_match_all("~$F\\s*,?~is",$x[1],$y,PREG_SET_ORDER);foreach($y
as$Gc){$A=str_replace("``","`",$Gc[2]).$Gc[3];$k[]=array("field"=>$A,"type"=>strtolower($Gc[5]),"length"=>preg_replace_callback("~$ib~s",'normalize_enum',$Gc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Gc[8] $Gc[7]"))),"full_type"=>$Gc[4],"inout"=>strtoupper($Gc[1]),"collation"=>strtolower($Gc[9]),);}if($Fd!="FUNCTION")return
array("fields"=>$k,"definition"=>$x[11]);return
array("fields"=>$k,"returns"=>array("type"=>$x[12],"length"=>$x[13],"unsigned"=>$x[15],"collation"=>$x[16]),"definition"=>$x[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$Nc){foreach($N
as$t=>$V)$N[$t]="$t = $V";$Pd=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $Pd ON DUPLICATE KEY UPDATE $Pd");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($bd){return
true;}function
create_sql($Q,$oa){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$oa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Oa){return"USE ".idf_escape($Oa);}function
trigger_sql($Q,$od){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$J)$I.="\n".($od=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($sb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$sb);}$s="sql";$Hd=array();$nd=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$t=>$V){$Hd+=$V;$nd[$t]=array_keys($V);}$Od=array("unsigned","zerofill","unsigned zerofill");$Bc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Hb=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Jb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.5.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Pa=$this->databases(false);return(!$Pa?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Pa[(information_schema($Pa[0])?1:0)]);}function
databases($xb=true){return
get_databases($xb);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Uživatel<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($ic,$E){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($sd){return
h($sd["Comment"]!=""?$sd["Comment"]:$sd["Name"]);}function
fieldName($j,$B=0){return
h($j["comment"]!=""?$j["comment"]:$j["field"]);}function
selectLinks($sd,$N=""){$a=$sd["Name"];if($N!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'Nová položka'."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Poslední stránka'."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$rd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J)$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];foreach($I
as$t=>$V){$A=$this->tableName(table_status($t));if($A!=""){$cd=preg_quote($rd);$fd="(:|\\s*-)?\\s+";$I[$t]["name"]=(preg_match("(^$cd$fd(.+)|^(.+?)$fd$cd\$)iu",$A,$x)?$x[2].$x[3]:$A);}else
unset($I[$t]);}return$I;}function
backwardKeysPrint($sa,$J){foreach($sa
as$Q=>$ra){foreach($ra["keys"]as$Da){$v=ME.'select='.urlencode($Q);$o=0;foreach($Da
as$e=>$V)$v.=where_link($o++,$e,$J[$V]);echo"<a href='".h($v)."'>".h($ra["name"])."</a>";$v=ME.'edit='.urlencode($Q);foreach($Da
as$e=>$V)$v.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($J[$V]);echo"<a href='".h($v)."' title='".'Nová položka'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$j){if(ereg("varchar|character varying",$j["type"]))return
idf_escape($j["field"]);}return"";}function
rowDescriptions($K,$_b){$I=$K;foreach($K[0]as$t=>$V){if(list($Q,$p,$A)=$this->_foreignColumn($_b,$t)){$Sb=array();foreach($K
as$J)$Sb[$J[$t]]=exact_value($J[$t]);$Ua=$this->_values[$Q];if(!$Ua)$Ua=get_key_vals("SELECT $p, $A FROM ".table($Q)." WHERE $p IN (".implode(", ",$Sb).")");foreach($K
as$_=>$J){if(isset($J[$t]))$I[$_][$t]=(string)$Ua[$J[$t]];}}}return$I;}function
selectVal($V,$v,$j){$I=($V===null?"&nbsp;":$V);if(ereg('blob|bytea',$j["type"])&&!is_utf8($V)){$I=lang(array('%d bajt','%d bajty','%d bajtů'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$I="<img src='$v' alt='$I'>";}if(like_bool($j)&&$I!="&nbsp;")$I=($V?'ano':'ne');if($v)$I="<a href='$v'>$I</a>";if(!$v&&!like_bool($j)&&ereg('int|float|double|decimal',$j["type"]))$I="<div class='number'>$I</div>";elseif(ereg('date',$j["type"]))$I="<div class='datetime'>$I</div>";return$I;}function
editVal($V,$j){if(ereg('date|timestamp',$j["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return(ereg("binary",$j["type"])?reset(unpack("H*",$V)):$V);}function
selectColumnsPrint($L,$f){}function
selectSearchPrint($X,$f,$r){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Vyhledat'."</legend><div>\n";$ac=array();foreach($X
as$t=>$V)$ac[$V["col"]]=$t;$o=0;$k=fields($_GET["select"]);foreach($f
as$A=>$Ta){$j=$k[$A];if(ereg("enum",$j["type"])||like_bool($j)){$t=$ac[$A];$o--;echo"<div>".h($Ta)."<input type='hidden' name='where[$o][col]' value='".h($A)."'>:",(like_bool($j)?" <select name='where[$o][val]'>".optionlist(array(""=>"",'ne','ano'),$X[$t]["val"],true)."</select>":enum_input("checkbox"," name='where[$o][val][]'",$j,(array)$X[$t]["val"],($j["null"]?0:null))),"</div>\n";unset($f[$A]);}elseif(is_array($Cc=$this->_foreignKeyOptions($_GET["select"],$A))){if($k[$A]["null"])$Cc[0]='('.'prázdné'.')';$t=$ac[$A];$o--;echo"<div>".h($Ta)."<input type='hidden' name='where[$o][col]' value='".h($A)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($Cc,$X[$t]["val"],true)."</select></div>\n";unset($f[$A]);}}$o=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'kdekoliv'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$V["op"]),"<input name='where[$o][val]' value='".h($V["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'kdekoliv'.")".optionlist($f,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($B,$f,$r){$Ec=array();foreach($r
as$t=>$q){$B=array();foreach($q["columns"]as$V)$B[]=$f[$V];if(count(array_filter($B,'strlen'))>1&&$t!="PRIMARY")$Ec[$t]=implode(", ",$B);}if($Ec){echo'<fieldset><legend>'.'Seřadit'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Ec,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($u){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$u),"</div></fieldset>\n";}function
selectLengthPrint($wd){}function
selectActionPrint($r){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($eb,$f){if($eb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Odesílatel'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Předmět'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložit'."'>\n";echo"<p>".'Přílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($eb)==1?'<input type="hidden" name="email_field" value="'.h(key($eb)).'">':html_select("email_field",$eb)),"<input type='submit' name='email' value='".'Odeslat'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$r){return
array(array(),array());}function
selectSearchProcess($k,$r){$I=array();foreach((array)$_GET["where"]as$t=>$X){$Aa=$X["col"];$_c=$X["op"];$V=$X["val"];if(($t<0?"":$Aa).$V!=""){$Ga=array();foreach(($Aa!=""?array($Aa=>$k[$Aa]):$k)as$A=>$j){if($Aa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$j["type"])){$A=idf_escape($A);if($Aa!=""&&$j["type"]=="enum")$Ga[]=(in_array(0,$V)?"$A IS NULL OR ":"")."$A IN (".implode(", ",array_map('intval',$V)).")";else{$xd=ereg('char|text|enum|set',$j["type"]);$W=$this->processInput($j,(!$_c&&$xd&&ereg('^[^%]+$',$V)?"%$V%":$V));$Ga[]=$A.($W=="NULL"?" IS".($_c==">="?" NOT":"")." $W":(in_array($_c,$this->operators)||$_c=="="?" $_c $W":($xd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($t<0&&$V=="0")$Ga[]="$A IS NULL";}}}$I[]=($Ga?"(".implode(" OR ",$Ga).")":"0");}}return$I;}function
selectOrderProcess($k,$r){$Ub=$_GET["index_order"];if($Ub!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Ub!=""?array($r[$Ub]):$r)as$q){if($Ub!=""||$q["type"]=="INDEX"){$Ta=false;foreach($q["columns"]as$V){if(ereg('date|timestamp',$k[$V]["type"])){$Ta=true;break;}}$I=array();foreach($q["columns"]as$V)$I[]=idf_escape($V).($Ta?" DESC":"");return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$_b){if($_POST["email_append"])return
true;if($_POST["email"]){$ed=0;if($_POST["all"]||$_POST["check"]){$j=idf_escape($_POST["email_field"]);$pd=$_POST["email_subject"];$z=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$pd.$z",$y);$K=get_rows("SELECT DISTINCT $j".($y[1]?", ".implode(", ",array_map('idf_escape',array_unique($y[1]))):"")." FROM ".table($_GET["select"])." WHERE $j IS NOT NULL AND $j != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$k=fields($_GET["select"]);foreach($this->rowDescriptions($K,$_b)as$J){$Xc=array('{\\'=>'{');foreach($y[1]as$V)$Xc['{$'."$V}"]=$this->editVal($J[$V],$k[$V]);$db=$J[$_POST["email_field"]];if(is_mail($db)&&send_mail($db,strtr($pd,$Xc),strtr($z,$Xc),$_POST["email_from"],$_FILES["email_files"]))$ed++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),$ed));}return
false;}function
messageQuery($G){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($j){$I=array();if($j["null"]&&ereg('blob',$j["type"]))$I["NULL"]='prázdné';$I[""]=($j["null"]||$j["auto_increment"]||like_bool($j)?"":"*");if(ereg('date|time',$j["type"]))$I["now"]='teď';if(eregi('_(md5|sha1)$',$j["field"],$x))$I[]=strtolower($x[1]);return$I;}function
editInput($Q,$j,$c,$W){if($j["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'původní'."</i></label> ":"").enum_input("radio",$c,$j,($W||isset($_GET["select"])?$W:0),($j["null"]?"":null));$Cc=$this->_foreignKeyOptions($Q,$j["field"],$W);if($Cc!==null)return(is_array($Cc)?"<select$c>".optionlist($Cc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Cc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($j["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($j))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Nb="";if(ereg('time',$j["type"]))$Nb='HH:MM:SS';if(ereg('date|timestamp',$j["type"]))$Nb='d.m.[rrrr]'.($Nb?" [$Nb]":"");if($Nb)return"<input value='".h($W)."'$c> ($Nb)";if(eregi('_(md5|sha1)$',$j["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($j,$W,$m=""){if($m=="now")return"$m()";$I=$W;if(ereg('date|timestamp',$j["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$x))$I=($x["p1"]!=""?$x["p1"]:($x["p2"]!=""?($x["p2"]<70?20:19).$x["p2"]:gmdate("Y")))."-$x[p3]$x[p4]-$x[p5]$x[p6]".end($x);$I=($j["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&($j["null"]||!ereg('char|text',$j["type"]))&&!like_bool($j))$I="NULL";elseif(ereg('^(md5|sha1)$',$m))$I="$m($I)";if(ereg("binary",$j["type"]))$I="unhex($I)";return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$od,$G){global$g;$H=$g->query($G,1);if($H){while($J=$H->fetch_assoc()){if($od=="table"){dump_csv(array_keys($J));$od="INSERT";}dump_csv($J);}}}function
dumpFilename($Qb){return
friendly_url($Qb);}function
dumpHeaders($Qb,$qc=false){$pb="csv";header("Content-Type: text/csv; charset=utf-8");return$pb;}function
homepage(){return
true;}function
navigation($pc){global$ca,$Bd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($pc=="auth"){$wb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if($E!==null){if($wb){echo"<p id='logins' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";$wb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'prázdné'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhlásit">
<input type="hidden" name="token" value="',$Bd,'">
</p>
</form>
';if($pc!="db"&&$pc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".'Žádné tabulky.'."\n";else$this->tablesPrint($R);}}}function
tablesPrint($ud){echo"<p id='tables' onmouseover='menuOver(this);' onmouseout='menuOut(this);'>\n";foreach($ud
as$J){$A=$this->tableName($J);if(isset($J["Engine"])&&$A!="")echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Vypsat data'."'>$A</a><br>\n";}}function
_foreignColumn($_b,$e){foreach((array)$_b[$e]as$zb){if(count($zb["source"])==1){$A=$this->rowDescription($zb["table"]);if($A!=""){$p=idf_escape($zb["target"][0]);return
array($zb["table"],$p,$A);}}}}function
_foreignKeyOptions($Q,$e,$W=null){global$g;if(list($S,$p,$A)=$this->_foreignColumn(column_foreign_keys($Q),$e)){$I=&$this->_values[$S];if($I===null){$R=table_status($S);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $p, $A FROM ".table($S)." ORDER BY 2"));}if(!$I&&$W!==null)return$g->result("SELECT $A FROM ".table($S)." WHERE $p = ".q($W));return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($yd,$i="",$xa=array(),$zd=""){global$ba,$b,$g,$Ya;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$_d=$yd.($zd!=""?": ".h($zd):"");$Ad=strip_tags($_d.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ad,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.5.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.5.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.5.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($xa!==null){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($v?$v:".").'">'.$Ya[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Server');if($xa===false)echo"$M\n";else{echo"<a href='".($v?h($v):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($xa)))echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($xa
as$t=>$V){$Ta=(is_array($V)?$V[1]:$V);if($Ta!="")echo'<a href="'.h(ME."$t=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Ta).'</a> &raquo; ';}}echo"$yd\n";}}echo"<h2>$_d</h2>\n";restart_session();$Qd=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$oc=$_SESSION["messages"][$Qd];if($oc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$oc)."</div>\n";unset($_SESSION["messages"][$Qd]);}$Pa=&get_session("dbs");if(DB!=""&&$Pa&&!in_array(DB,$Pa,true))$Pa=null;if($i)echo"<div class='error'>$i</div>\n";define("PAGE_HEADER",1);}function
page_footer($pc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($pc);echo'</div>
';}function
int32($_){while($_>=2147483648)$_-=4294967296;while($_<=-2147483649)$_+=4294967296;return(int)$_;}function
long2str($U,$Vd){$ad='';foreach($U
as$V)$ad.=pack('V',$V);if($Vd)return
substr($ad,0,end($U));return$ad;}function
str2long($ad,$Vd){$U=array_values(unpack('V*',str_pad($ad,4*ceil(strlen($ad)/4),"\0")));if($Vd)$U[]=strlen($ad);return$U;}function
xxtea_mx($Z,$Y,$P,$Zb){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($Zb^$Z));}function
encrypt_string($md,$t){if($md=="")return"";$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($md,true);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$Rc=floor(6+52/($_+1));$P=0;while($Rc-->0){$P=int32($P+0x9E3779B9);$ab=$P>>2&3;for($C=0;$C<$_;$C++){$Y=$U[$C+1];$rc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Z=int32($U[$C]+$rc);$U[$C]=$Z;}$Y=$U[0];$rc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Z=int32($U[$_]+$rc);$U[$_]=$Z;}return
long2str($U,false);}function
decrypt_string($md,$t){if($md=="")return"";$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($md,false);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$Rc=floor(6+52/($_+1));$P=int32($Rc*0x9E3779B9);while($P){$ab=$P>>2&3;for($C=$_;$C>0;$C--){$Z=$U[$C-1];$rc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Y=int32($U[$C]-$rc);$U[$C]=$Y;}$Z=$U[$_];$rc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Y=int32($U[0]-$rc);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$g='';$Bd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Jc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($t)=explode(":",$V);$Jc[$t]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];if($d["permanent"]){$t=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"]);$Oc=$b->permanentLogin();$Jc[$t]="$t:".base64_encode($Oc?encrypt_string($d["password"],$Oc):"");cookie("adminer_permanent",implode(" ",$Jc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Bd&&$_POST["token"]!=$Bd){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$t)set_session($t,null);$t=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Jc[$t]){unset($Jc[$t]);cookie("adminer_permanent",implode(" ",$Jc));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($Jc&&!$_SESSION["pwds"]){session_regenerate_id();$Oc=$b->permanentLogin();foreach($Jc
as$t=>$V){list(,$_a)=explode(":",$V);list($Xa,$M,$T)=array_map('base64_decode',explode("-",$t));$_SESSION["pwds"][$Xa][$M][$T]=decrypt_string(base64_decode($_a),$Oc);}}function
auth_error($mb=null){global$g,$b,$Bd;$hd=session_name();$i="";if(!$_COOKIE[$hd]&&$_GET[$hd]&&ini_bool("session.use_only_cookies"))$i='Session proměnné musí být povolené.';elseif(isset($_GET["username"])){if(($_COOKIE[$hd]||$_GET[$hd])&&!$Bd)$i='Session vypršela, přihlašte se prosím znovu.';else{$E=&get_session("pwds");if($E!==null){$i=h($mb?$mb->getMessage():(is_string($g)?$g:'Neplatné přihlašovací údaje.'));$E=null;}}}page_header('Přihlásit se',$i,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žádné rozšíření',sprintf('Není dostupné žádné z podporovaných PHP rozšíření (%s).',implode(", ",$Mc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Bd=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Bd;$i=($_POST?($_POST["token"]==$Bd?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));$g->select_db($b->database());function
email_header($Lb){return"=?UTF-8?B?".base64_encode($Lb)."?=";}function
send_mail($db,$pd,$z,$Gb="",$ub=array()){$h=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$z=str_replace("\n",$h,wordwrap(str_replace("\r","","$z\n")));$wa=uniqid("boundary");$na="";foreach((array)$ub["error"]as$t=>$V){if(!$V)$na.="--$wa$h"."Content-Type: ".str_replace("\n","",$ub["type"][$t]).$h."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$ub["name"][$t])."\"$h"."Content-Transfer-Encoding: base64$h$h".chunk_split(base64_encode(file_get_contents($ub["tmp_name"][$t])),76,$h).$h;}$ua="";$Mb="Content-Type: text/plain; charset=utf-8$h"."Content-Transfer-Encoding: 8bit";if($na){$na.="--$wa--$h";$ua="--$wa$h$Mb$h$h";$Mb="Content-Type: multipart/mixed; boundary=\"$wa\"";}$Mb.=$h."MIME-Version: 1.0$h"."X-Mailer: Adminer Editor".($Gb?$h."From: ".str_replace("\n","",$Gb):"");return
mail($db,email_header($pd),$ua.$z.$na,$Mb);}function
like_bool($j){return
ereg("bool|(tinyint|bit)\\(1\\)",$j["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$xc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Ya[DRIVER]='Přihlásit se';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Pd=(isset($_GET["select"])?$_POST["edit"]:$X);$k=fields($a);foreach($k
as$A=>$j){if(!isset($j["privileges"][$Pd?"update":"insert"])||$b->fieldName($j)=="")unset($k[$A]);}if($_POST&&!$i&&!isset($_GET["select"])){$w=$_POST["referer"];if($_POST["insert"])$w=($Pd?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$w))$w=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$w,'Položka byla smazána.');else{$N=array();foreach($k
as$A=>$j){$V=process_input($j);if($V!==false&&$V!==null)$N[idf_escape($A)]=($Pd?"\n".idf_escape($A)." = $V":$V);}if($Pd){if(!$N)redirect($w);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$N),"\nWHERE $X"),$w,'Položka byla aktualizována.');}else{$H=insert_into($a,$N);$ec=($H?last_id():0);queries_redirect($w,sprintf('Položka%s byla vložena.',($ec?" $ec":"")),$H);}}}$td=$b->tableName(table_status($a));page_header(($Pd?'Upravit':'Vložit'),$i,array("select"=>array($a,$td)),$td);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($X){$L=array();foreach($k
as$A=>$j){if(isset($j["privileges"]["select"]))$L[]=($_POST["clone"]&&$j["auto_increment"]?"'' AS ":($s=="sql"&&ereg("enum|set",$j["type"])?"1*".idf_escape($A)." AS ":"")).idf_escape($A);}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".'Žádné řádky.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($k){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($k
as$A=>$j){echo"<tr><th>".$b->fieldName($j);$Sa=$_GET["set"][bracket_escape($A)];$W=($J!==null?($J[$A]!=""&&$s=="sql"&&ereg("enum|set",$j["type"])?(is_array($J[$A])?array_sum($J[$A]):+$J[$A]):$J[$A]):(!$Pd&&$j["auto_increment"]?"":(isset($_GET["select"])?false:($Sa!==null?$Sa:$j["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$j);$m=($_POST["save"]?(string)$_POST["function"][$A]:($Pd&&$j["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if($j["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$m="now";}input($j,$W,$m);echo"\n";}echo"</table>\n";}echo'<p>
';if($k){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Pd?'Uložit a pokračovat v editaci':'Uložit a vložit další')."' title='Ctrl+Shift+Enter'>\n";}echo($Pd?"<input type='submit' name='delete' value='".'Smazat'."' onclick=\"return confirm('".'Opravdu?'."');\">\n":($_POST||!$k?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Bd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$r=indexes($a);$k=fields($a);$Bb=column_foreign_keys($a);$wc="";if($R["Oid"]=="t"){$wc=($s=="sqlite"?"rowid":"oid");$r[]=array("type"=>"PRIMARY","columns"=>array($wc));}parse_str($_COOKIE["adminer_import"],$ha);$Zc=array();$f=array();$wd=null;foreach($k
as$t=>$j){$A=$b->fieldName($j);if(isset($j["privileges"]["select"])&&$A!=""){$f[$t]=html_entity_decode(strip_tags($A));if(ereg('text|lob',$j["type"]))$wd=$b->selectLengthProcess();}$Zc+=$j["privileges"];}list($L,$n)=$b->selectColumnsProcess($f,$r);$X=$b->selectSearchProcess($k,$r);$B=$b->selectOrderProcess($k,$r);$u=$b->selectLimitProcess();$Gb=($L?implode(", ",$L):($wc?"$wc, ":"")."*")."\nFROM ".table($a);$Ib=($n&&count($n)<count($L)?"\nGROUP BY ".implode(", ",$n):"").($B?"\nORDER BY ".implode(", ",$B):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ld=>$J)echo$g->result("SELECT".limit(idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($Ld).($X?" AND ".implode(" AND ",$X):"").($B?" ORDER BY ".implode(", ",$B):""),1));exit;}if($_POST&&!$i){$Xd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Nc=$Nd=null;foreach($r
as$q){if($q["type"]=="PRIMARY"){$Nc=array_flip($q["columns"]);$Nd=($L?$Nc:array());break;}}foreach((array)$Nd
as$t=>$V){if(in_array(idf_escape($t),$L))unset($Nd[$t]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Nd===array()){$Wd=$X;if(is_array($_POST["check"]))$Wd[]="($Xd)";$G="SELECT $Gb".($Wd?"\nWHERE ".implode(" AND ",$Wd):"").$Ib;}else{$Jd=array();foreach($_POST["check"]as$V)$Jd[]="(SELECT".limit($Gb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V).$Ib,1).")";$G=implode(" UNION ALL ",$Jd);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Bb)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($f
as$A=>$V){$V=process_input($k[$A]);if($V!==null){if($_POST["clone"])$N[idf_escape($A)]=($V!==false?$V:idf_escape($A));elseif($V!==false)$N[]=idf_escape($A)." = $V";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ea="UPDATE";if($_POST["delete"]){$Ea="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ea="INSERT";$G="INTO $G";}if($_POST["all"]||($Nd===array()&&$_POST["check"])||count($n)<count($L)){$H=queries("$Ea $G".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $Xd"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ea.limit1($G,"\nWHERE ".where_check($V)));if(!$H)break;$ia+=$g->affected_rows;}}}$z=lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ia);if($_POST["clone"]&&$H&&$ia==1){$ec=last_id();if($ec)$z=sprintf('Položka%s byla vložena.'," $ec");}queries_redirect(remove_from_uri("page"),$z,$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$i='Dvojklikněte na políčko, které chcete změnit.';else{$H=true;$ia=0;foreach($_POST["val"]as$Ld=>$J){$N=array();foreach($J
as$t=>$V){$t=bracket_escape($t,1);$N[]=idf_escape($t)." = ".(ereg('char|text',$k[$t]["type"])||$V!=""?$b->processInput($k[$t],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$Wd=" WHERE ".where_check($Ld).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".(count($n)<count($L)?" $G$Wd":limit1($G,$Wd)));if(!$H)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ia),$H);}}elseif(is_string($l=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Da=array_keys($k);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$l,$y);$ia=count($y[0]);begin();$fd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($y[0]as$t=>$V){preg_match_all("~((\"[^\"]*\")+|[^$fd]*)$fd~",$V.$fd,$kc);if(!$t&&!array_diff($kc[1],$Da)){$Da=$kc[1];$ia--;}else{$N=array();foreach($kc[1]as$o=>$Aa)$N[idf_escape($Da[$o])]=($Aa==""&&$k[$Da[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Aa))));$H=insert_update($a,$N,$Nc);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$ia),$H);queries("ROLLBACK");}else$i=upload_error($l);}}$td=$b->tableName($R);page_header('Vypsat'.": $td",$i);session_write_close();$N=null;if(isset($Zc["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Bb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($R,$N);if(!$f)echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($k?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$f);$b->selectSearchPrint($X,$f,$r);$b->selectOrderPrint($B,$f,$r);$b->selectLimitPrint($u);$b->selectLengthPrint($wd);$b->selectActionPrint($r);echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Eb=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$Eb-1)/$u);}$G="SELECT".limit((+$u&&$n&&count($n)<count($L)&&$s=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Gb,($X?"\nWHERE ".implode(" AND ",$X):"").$Ib,($u!=""?+$u:null),($D?$u*$D:0),"\n");echo$b->selectQuery($G);$H=$g->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($s=="mssql")$H->seek($u*$D);$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$s=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$Eb=(+$u&&$n&&count($n)<count($L)?($s=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".'Žádné řádky.'."\n";else{$ta=$b->backwardKeys($a,$td);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$n&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$sc=array();$Hb=array();reset($L);$Tc=1;foreach($K[0]as$t=>$V){if($t!=$wc){$V=$_GET["columns"][key($L)];$j=$k[$L?($V?$V["col"]:current($L)):$t];$A=($j?$b->fieldName($j,$Tc):"*");if($A!=""){$Tc++;$sc[$t]=$A;$e=idf_escape($t);$Pb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($t);$Ta="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Pb.($B[0]==$e||$B[0]==$t||(!$B&&count($n)<count($L)&&$n[0]==$e)?$Ta:'')).'">';echo(!$L||$V?apply_sql_function($V["fun"],$A):h(current($L)))."</a>";echo"<span class='column hidden'>","<a href='".h($Pb.$Ta)."' title='".'sestupně'."' class='text'> ↓</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($t)).'\'); return false;" title="'.'Vyhledat'.'" class="text jsonly"> =</a>';echo"</span>";}$Hb[$t]=$V["fun"];next($L);}}$hc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$t=>$V)$hc[$t]=max($hc[$t],min(40,strlen(utf8_decode($V))));}}echo($ta?"<th>".'Vztahy':"")."</thead>\n";foreach($b->rowDescriptions($K,$Bb)as$_=>$J){$Kd=unique_array($K[$_],$r);$Ld="";foreach($Kd
as$t=>$V)$Ld.="&".($V!==null?urlencode("where[".bracket_escape($t)."]")."=".urlencode($V):"null%5B%5D=".urlencode($t));echo"<tr".odd().">".(!$n&&$L?"":"<td>".checkbox("check[]",substr($Ld,1),in_array(substr($Ld,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($n)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Ld)."'>".'upravit'."</a>"));foreach($J
as$t=>$V){if(isset($sc[$t])){$j=$k[$t];if($V!=""&&(!isset($fb[$t])||$fb[$t]!=""))$fb[$t]=(is_mail($V)?$sc[$t]:"");$v="";$V=$b->editVal($V,$j);if($V!==null){if(ereg('blob|bytea|raw|file',$j["type"])&&$V!="")$v=h(ME.'download='.urlencode($a).'&field='.urlencode($t).$Ld);if($V==="")$V="&nbsp;";elseif(is_utf8($V)){if($wd!=""&&ereg('text|blob',$j["type"]))$V=shorten_utf8($V,max(0,+$wd));else$V=h($V);}if(!$v){foreach((array)$Bb[$t]as$Ab){if(count($Bb[$t])==1||end($Ab["source"])==$t){$v="";foreach($Ab["source"]as$o=>$id)$v.=where_link($o,$Ab["target"][$o],$K[$_][$id]);$v=h(($Ab["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ab["db"]),ME):ME).'select='.urlencode($Ab["table"]).$v);if(count($Ab["source"])==1)break;}}}if($t=="COUNT(*)"){$v=h(ME."select=".urlencode($a));$o=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Kd))$v.=h(where_link($o++,$U["col"],$U["val"],$U["op"]));}foreach($Kd
as$Zb=>$U)$v.=h(where_link($o++,$Zb,$U));}}if(!$v){if(is_mail($V))$v="mailto:$V";if($Qc=is_url($J[$t]))$v=($Qc=="http"&&$aa?$J[$t]:"$Qc://www.adminer.org/redirect/?url=".urlencode($J[$t]));}$p=h("val[$Ld][".bracket_escape($t)."]");$W=$_POST["val"][$Ld][bracket_escape($t)];$Kb=h($W!==null?$W:$J[$t]);$jc=strpos($V,"<i>...</i>");$cb=is_utf8($V)&&$K[$_][$t]==$J[$t]&&!$Hb[$t];$vd=ereg('text|lob',$j["type"]);echo(($_GET["modify"]&&$cb)||$W!==null?"<td>".($vd?"<textarea name='$p' cols='30' rows='".(substr_count($J[$t],"\n")+1)."'>$Kb</textarea>":"<input name='$p' value='$Kb' size='$hc[$t]'>"):"<td id='$p' ondblclick=\"".($cb?"selectDblClick(this, event".($jc?", 2":($vd?", 1":"")).")":"alert('".h('Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$b->selectVal($V,$v,$j));}}if($ta)echo"<td>";$b->backwardKeysPrint($ta,$K[$_]);echo"</tr>\n";}echo"</table>\n",(!$n&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$lb=true;if($_GET["page"]!="last"&&+$u&&count($n)>=count($L)&&($Eb>=$u||$D)){$Eb=found_rows($R,$X);if($Eb<max(1e4,2*($D+1)*$u)){ob_flush();flush();$Eb=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));}else$lb=false;}echo"<p class='pages'>";if(+$u&&$Eb>$u){$lc=floor(($Eb-1)/$u);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($D+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$D).($D>5?" ...":"");for($o=max(1,$D-4);$o<min($lc,$D+5);$o++)echo
pagination($o,$D);echo($D+5<$lc?" ...":"").($lb?pagination($lc,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($lb?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$Eb).") ".checkbox("all",1,0,'celý výsledek')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit"',($_GET["modify"]?'':' title="'.'Dvojklikněte na políčko, které chcete změnit.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$Eb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Cb=$b->dumpFormat();if($Cb){print_fieldset("export",'Export');$Fc=$b->dumpOutput();echo($Fc?html_select("output",$Fc,$ha["output"])." ":""),html_select("format",$Cb,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$Bd'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($fb,'strlen'),$f);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($Q,$p,$A)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$g->query("SELECT $p, $A FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$p = $_GET[value] OR ":"")."$A LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($o=0;$o<10&&($J=$H->fetch_row());$o++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($p))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";if($o==10)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhledat'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabulka'.'<td>'.'Řádků'."</thead>\n";foreach(table_status()as$Q=>$J){$A=$b->tableName($J);if(isset($J["Engine"])&&$A!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$A</a>";$V=number_format($J["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();