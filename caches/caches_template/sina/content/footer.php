<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>  <div class="footer" style="padding: 15px; font-size: 12px; line-height: 20px; text-align: center;">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f8b50e6ae627a6d2d43e41af04c5d39f&sql=SELECT+%2A+FROM+v9_page+where+catid%3D%2753%27&return=page_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">�༭</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid='53' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$page_data = $a;unset($a);?>

  <?php $n=1;if(is_array($page_data)) foreach($page_data AS $v) { ?>
  
											
										
		<?php echo $v['content'];?>
										
  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    <br>
  </div>
</div>
</div>

<script src="<?php echo APP_PATH;?>statics/sina/js/move.js"></script>
<!--��ά�� begin--> 

<script type="text/javascript">

	(function(aClz,maxSize,co) {

	var doc = document,

		side = (function() {

			var body = doc.body,

				firstChild = body.firstChild,

				wrap = doc.createElement('div');

			wrap.className = 'side-btns-2wm';

			wrap.style.display = 'none';
			wrap.style.display = 'none';
			thisURL = document.URL;
			strwrite = "<img src='https://chart.googleapis.com/chart?cht=qr&chs=90x90&choe=UTF-8&chld=L|4&chl=" + thisURL + "' width='90' height='90' alt='��ַ��ά��' />"; 

			wrap.innerHTML = '<a class="side-btns-2wm-img" target="_blank" href="#" title="�ֻ��˿��ٷ���" suda-uatrack="key=qr_code&value=open_index_qrcode"><em>ʹ���ֻ�ɨ��</em> '+strwrite+' <span>ʹ���ֻ�ɨ��</span> </a> <a href="javascript:;" class="side-btns-2wm-close" title="�ر�" suda-uatrack="key=qr_code&value=open_index_qrcode_close">�ر�</a>';

			firstChild ? firstChild.parentNode.insertBefore(wrap, firstChild) : body.appendChild(wrap);

			return wrap;

		})(),

		clz = side.className,

		nClz = clz + ' ' + aClz,

		cookieName = co.name || 'close_open_index_2wm',

		domain = co.domain || 'open.sina.com.cn',

		lnks = side.getElementsByTagName('a'),

		close = lnks[lnks.length-1],

		toggle = function(dis) {

			side.style.display = dis;

		}, addEvent = function(o, s, fn) {

			if (o.attachEvent) {

				o.attachEvent('on' + s, fn);

			} else {

				o.addEventListener(s, fn, false);

			}

			return o;

		}, resize = function() {

			var body = doc.documentElement || doc.body;

			if (!body) {

				return;

			}

			var width = body.offsetWidth;

			if (width < maxSize) {

				side.className = nClz;

			} else {

				side.className = clz;

			}

		};

		// name, value, expire(hour), path, domain, secure

		var cookie = (function() {var co = {}; co.getCookie = function(name) {name = name.replace(/([\.\[\]\$])/g, '\\\$1'); var rep = new RegExp(name + '=([^;]*)?;', 'i'); var co = document.cookie + ';'; var res = co.match(rep); if (res) {return unescape(res[1]) || ""; } else {return ""; } }; co.setCookie = function(name, value, expire, path, domain, secure) {var cstr = []; cstr.push(name + '=' + escape(value)); if (expire) {var dd = new Date(); var expires = dd.getTime() + expire * 3600000; dd.setTime(expires); cstr.push('expires=' + dd.toGMTString()); } if (path) {cstr.push('path=' + path); } if (domain) {cstr.push('domain=' + domain); } if (secure) {cstr.push(secure); } document.cookie = cstr.join(';'); }; co.deleteCookie = function(name) {document.cookie = name + '=;' + 'expires=Fri, 31 Dec 1999 23:59:59 GMT;'; }; return co; })();

		var display = cookie.getCookie(cookieName);

		if(display!=''){

			toggle('none');

			return;

		}

		toggle('block');

		resize();

		addEvent(window, 'resize', resize);

		addEvent(close,'click',function(e){

			toggle('none');

			cookie.setCookie(cookieName,'1',15*24,'/',domain);

			if(window.event){

				window.event.returnValue = false;

			}else{

				e.preventDefault();

			}

		});

	})('side-btns-2wm-resize',1174,{

		name:'close_open_index_2wm',				

		domain:'open.sina.com.cn'		
	});

	</script>
</body>
</html>