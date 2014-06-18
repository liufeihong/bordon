/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.dialog.add('colordialog',function(a){var b=CKEDITOR.dom.element,c=CKEDITOR.document,d=CKEDITOR.tools,e=a.lang.colordialog,f;function g(){return{type:'html',html:'&nbsp;'};};function h(){c.getById(w).removeStyle('background-color');f.getContentElement('picker','selectedColor').setValue('');};function i(x){if(!(x instanceof CKEDITOR.dom.event))x=new CKEDITOR.dom.event(x);var y=x.getTarget(),z;if(y.getName()=='a'&&(z=y.getChild(0).getHtml()))f.getContentElement('picker','selectedColor').setValue(z);};function j(x){if(!(x instanceof CKEDITOR.dom.event))x=x.data;var y=x.getTarget(),z;if(y.getName()=='a'&&(z=y.getChild(0).getHtml())){c.getById(u).setStyle('background-color',z);c.getById(v).setHtml(z);}};function k(){c.getById(u).removeStyle('background-color');c.getById(v).setHtml('&nbsp;');};var l=d.addFunction(k),m=i,n=CKEDITOR.tools.addFunction(m),o=j,p=k,q=CKEDITOR.tools.addFunction(function(x){x=new CKEDITOR.dom.event(x);var y=x.getTarget(),z,A,B=x.getKeystroke(),C=a.lang.dir=='rtl';switch(B){case 38:if(z=y.getParent().getParent().getPrevious()){A=z.getChild([y.getParent().getIndex(),0]);A.focus();p(x,y);o(x,A);}x.preventDefault();break;case 40:if(z=y.getParent().getParent().getNext()){A=z.getChild([y.getParent().getIndex(),0]);if(A&&A.type==1){A.focus();p(x,y);o(x,A);}}x.preventDefault();break;case 32:m(x);x.preventDefault();break;case C?37:39:if(z=y.getParent().getNext()){A=z.getChild(0);if(A.type==1){A.focus();p(x,y);o(x,A);x.preventDefault(true);}else p(null,y);}else if(z=y.getParent().getParent().getNext()){A=z.getChild([0,0]);if(A&&A.type==1){A.focus();p(x,y);o(x,A);x.preventDefault(true);}else p(null,y);}break;case C?39:37:if(z=y.getParent().getPrevious()){A=z.getChild(0);A.focus();p(x,y);o(x,A);x.preventDefault(true);}else if(z=y.getParent().getParent().getPrevious()){A=z.getLast().getChild(0);A.focus();p(x,y);o(x,A);x.preventDefault(true);}else p(null,y);break;default:return;}});function r(){var x=['00','33','66','99','cc','ff'];function y(D,E){for(var F=D;F<D+3;F++){var G=s.$.insertRow(-1);for(var H=E;H<E+3;H++)for(var I=0;I<6;I++)z(G,'#'+x[H]+x[I]+x[F]);}};function z(D,E){var F=new b(D.insertCell(-1));F.setAttribute('class','ColorCell');F.setStyle('background-color',E);F.setStyle('width','15px');F.setStyle('height','15px');var G=F.$.cellIndex+1+18*D.rowIndex;F.append(CKEDITOR.dom.element.createFromHtml('<a href="javascript: void(0);" role="option" aria-posinset="'+G+'"'+' aria-setsize="'+234+'"'+' style="cursor: pointer;display:block;width:100%;height:100% " title="'+CKEDITOR.tools.htmlEncode(E)+'"'+' onkeydown="CKEDITOR.tools.callFunction( '+q+', event, this )"'+' onclick="CKEDITOR.tools.callFunction('+n+', event, this ); return false;"'+' tabindex="-1"><span class="cke_voice_label">'+E+'</span></a>',CKEDITOR.document));
};y(0,0);y(3,0);y(0,3);y(3,3);var A=s.$.insertRow(-1);for(var B=0;B<6;B++)z(A,'#'+x[B]+x[B]+x[B]);for(var C=0;C<12;C++)z(A,'#000000');};var s=new b('table');r();var t=function(x){return x+CKEDITOR.tools.getNextNumber();},u=t('hicolor'),v=t('hicolortext'),w=t('selhicolor');return{title:e.title,minWidth:360,minHeight:220,onLoad:function(){f=this;},contents:[{id:'picker',label:e.title,accessKey:'I',elements:[{type:'hbox',padding:0,widths:['70%','10%','30%'],children:[{type:'html',html:'<table role="listbox" aria-labelledby="color_table_label" onmouseout="CKEDITOR.tools.callFunction( '+l+' );">'+s.getHtml()+'</table>'+'<span id="color_table_label" class="cke_voice_label">'+e.options+'</span>',onLoad:function(){var x=CKEDITOR.document.getById(this.domId);x.on('mouseover',j);},focus:function(){var x=this.getElement().getElementsByTag('a').getItem(0);x.focus();}},g(),{type:'vbox',padding:0,widths:['70%','5%','25%'],children:[{type:'html',html:'<span>'+e.highlight+'</span>\t\t\t\t\t\t\t\t\t\t\t\t<div id="'+u+'" style="border: 1px solid; height: 74px; width: 74px;"></div>\t\t\t\t\t\t\t\t\t\t\t\t<div id="'+v+'">&nbsp;</div><span>'+e.selected+'</span>\t\t\t\t\t\t\t\t\t\t\t\t<div id="'+w+'" style="border: 1px solid; height: 20px; width: 74px;"></div>'},{type:'text',label:e.selected,labelStyle:'display:none',id:'selectedColor',style:'width: 74px',onChange:function(){try{c.getById(w).setStyle('background-color',this.getValue());}catch(x){h();}}},g(),{type:'button',id:'clear',style:'margin-top: 5px',label:e.clear,onClick:h}]}]}]}]};});

