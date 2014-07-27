<link rel="stylesheet" href="/nova/components/com_jce/editor/libraries/css/editor.css?639612a6057368d01351230729238959" type="text/css" />
  <script data-cfasync="false" type="text/javascript" src="/nova/components/com_jce/editor/tiny_mce/tiny_mce.js?bd349773b00df72c4033f7d85be75b6e"></script>
  <script data-cfasync="false" type="text/javascript" src="/nova/components/com_jce/editor/libraries/js/editor.js?2c88d1c9ac293abc62c31f1ea3339bfe"></script>
  <script data-cfasync="false" type="text/javascript" src="/nova/administrator/index.php?option=com_jce&view=editor&layout=editor&task=loadlanguages&lang=en&component_id=22&wf00aa9f324c5dea248a99399f11b46954=1"></script>
<script data-cfasync="false" type="text/javascript">
		try{WFEditor.init({
			token: "wf00aa9f324c5dea248a99399f11b46954",
			etag: "f52854cc99ae1c1966b0a21d0127975b",
			base_url: "http://localhost/nova/",
			language: "en",
			directionality: "ltr",
			theme: "advanced",
			plugins: "autolink,cleanup,core,code,colorpicker,upload,format,charmap,contextmenu,browser,inlinepopups,media,clipboard,searchreplace,directionality,fullscreen,preview,source,table,textcase,print,style,nonbreaking,visualchars,visualblocks,xhtmlxtras,imgmanager,anchor,link,spellchecker,article,lists,advlist,wordcount",
			language_load: false,
			component_id: 22,
			theme_advanced_buttons1: "help,newdocument,undo,redo,|,bold,italic,underline,strikethrough,justifyfull,justifycenter,justifyleft,justifyright,|,blockquote,formatselect,styleselect,removeformat,cleanup",
			theme_advanced_buttons2: "fontselect,fontsizeselect,forecolor,backcolor,|,cut,copy,paste,pastetext,indent,outdent,numlist,bullist,sub,sup,textcase,charmap,hr",
			theme_advanced_buttons3: "ltr,rtl,fullscreen,preview,source,print,search,replace,|,table_insert,delete_table,|,row_props,cell_props,|,row_before,row_after,delete_row,|,col_before,col_after,delete_col,|,split_cells,merge_cells",
			theme_advanced_buttons4: "visualaid,visualchars,visualblocks,nonbreaking,style,cite,abbr,acronym,del,ins,attribs,anchor,unlink,link,imgmanager,spellchecker,readmore,pagebreak",
			theme_advanced_resizing: true,
			content_css: "/nova/templates/joomlavi/css/template.css?989cb074595595ccd4c6557c4529f45f",
			entities: "160,nbsp",
			invalid_elements: "script,style,applet,body,bgsound,base,basefont,frame,frameset,head,html,id,ilayer,layer,link,meta,name,title,xml",
			forced_root_block: "p",
			theme_advanced_blockformats: {"advanced.paragraph":"p","advanced.div":"div","advanced.div_container":"div_container","advanced.address":"address","advanced.pre":"pre","advanced.h1":"h1","advanced.h2":"h2","advanced.h3":"h3","advanced.h4":"h4","advanced.h5":"h5","advanced.h6":"h6","advanced.code":"code","advanced.samp":"samp","advanced.span":"span","advanced.section":"section","advanced.article":"article","advanced.aside":"aside","advanced.figure":"figure","advanced.dt":"dt","advanced.dd":"dd"},
			remove_script_host: false,
			theme_advanced_font_sizes: "8pt,10pt,12pt,14pt,18pt,24pt,36pt",
			file_browser_callback: function(name, url, type, win){tinyMCE.activeEditor.plugins.browser.browse(name, url, type, win);},
			imgmanager_upload: {"max_size":1024,"filetypes":["jpg","jpeg","png","gif"]},
			spellchecker_engine: "browser",
			compress: {"javascript":0,"css":0}
        });}catch(e){console.debug(e);}
</script>
 <div class="container-fluid container-main">
	<section id="content">
		<!-- Begin Content -->
		
		<div class="row-fluid">
							<div class="span12">
										
<div id="system-message-container">
</div>
										
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'article.cancel' || document.formvalidator.isValid(document.id('item-form')))
		{
			WFEditor.getContent('jform_articletext');			Joomla.submitform(task, document.getElementById('item-form'));
		}
	}
</script>

<form class="form-validate" id="item-form" name="adminForm" method="post" action="/nova/administrator/index.php?option=com_content&amp;layout=edit&amp;id=0">

	<div class="form-inline form-inline-header">
	

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip required invalid" for="jform_title" id="jform_title-lbl" data-original-title="&lt;strong&gt;Title&lt;/strong&gt;" aria-invalid="true">Title<span class="star">&nbsp;*</span></label></div>
		<div class="controls"><input type="text" aria-required="true" required="" size="40" class="input-xxlarge input-large-text invalid" value="" id="jform_title" name="jform[title]" aria-invalid="true"></div>
</div>


<div class="control-group ">
<div class="control-label">
<label title="" class="hasTooltip" for="jform_alias" id="jform_alias-lbl">Short Description</label>
</div>
<div class="controls">

<input type="text" size="40" value="" id="jform_alias" name="jform[alias]">

</div>
</div>
</div>

	<div class="form-horizontal">
		
<ul id="myTabTabs" class="nav nav-tabs">
<li class=" active"><a data-toggle="tab" href="#general">Content</a></li>
<li class=""><a data-toggle="tab" href="#publishing">Publishing</a></li><li class="">
<a data-toggle="tab" href="#images">Images and links</a></li>

</ul>
<div id="myTabContent" class="tab-content">
		
<div class="tab-pane active" id="general">
		<div class="row-fluid">
			<div class="span9">
				<fieldset class="adminform">
					<label aria-visible="false" style="display:none;" for="jform_articletext">jform_articletext_textarea</label>
					
					<textarea wrap="off" class="wfEditor mce_editable source" style="width: 100%; height: 500px; display: none;" rows="" cols="" name="jform[articletext]" id="jform_articletext" aria-hidden="true"></textarea>
					<div role="application" aria-labelledby="jform_articletext_voice" id="jform_articletext_parent" class="mceEditor defaultSkin">
					
					<span class="mceVoiceLabel" style="display:none;" id="jform_articletext_voice">Rich Text Area</span>

<table cellspacing="0" cellpadding="0" role="presentation" id="jform_articletext_tbl" class="mceLayout" style="width: 100%; height: 500px;">
					<tbody><tr role="toolbar" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="toolbar"><div aria-labelledby="jform_articletext_toolbargroup_voice" role="group" id="jform_articletext_toolbargroup" tabindex="-1">
					<span role="application"><span style="display:none;" class="mceVoiceLabel" id="jform_articletext_toolbargroup_voice">Toolbar</span><table align="" cellspacing="0" cellpadding="0" tabindex="-1" role="presentation" class="mceToolbar mceToolbarRow1 Enabled" id="jform_articletext_toolbar1" aria-disabled="false" aria-pressed="false">
					<tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td>
					<td style="position: relative"><a title="Help" aria-labelledby="jform_articletext_help_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_help" href="#" id="jform_articletext_help" role="button" tabindex="-1"><span class="mceIcon mce_help"></span><span id="jform_articletext_help_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Help</span></a></td>
					<td style="position: relative"><a title="New document" aria-labelledby="jform_articletext_newdocument_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_newdocument" href="#" id="jform_articletext_newdocument" role="button" tabindex="-1"><span class="mceIcon mce_newdocument"></span><span id="jform_articletext_newdocument_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">New document</span></a></td><td style="position: relative"><a title="Undo (Ctrl+Z)" aria-labelledby="jform_articletext_undo_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_undo mceButtonDisabled" href="#" id="jform_articletext_undo" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_undo"></span><span id="jform_articletext_undo_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Undo (Ctrl+Z)</span></a></td><td style="position: relative"><a title="Redo (Ctrl+Y)" aria-labelledby="jform_articletext_redo_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_redo mceButtonDisabled" href="#" id="jform_articletext_redo" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_redo"></span><span id="jform_articletext_redo_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Redo (Ctrl+Y)</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Bold (Ctrl+B)" aria-labelledby="jform_articletext_bold_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_bold" href="#" id="jform_articletext_bold" role="button" tabindex="-1"><span class="mceIcon mce_bold"></span><span id="jform_articletext_bold_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Bold (Ctrl+B)</span></a></td><td style="position: relative"><a title="Italic (Ctrl+I)" aria-labelledby="jform_articletext_italic_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_italic" href="#" id="jform_articletext_italic" role="button" tabindex="-1"><span class="mceIcon mce_italic"></span><span id="jform_articletext_italic_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Italic (Ctrl+I)</span></a></td><td style="position: relative"><a title="Underline (Ctrl+U)" aria-labelledby="jform_articletext_underline_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_underline" href="#" id="jform_articletext_underline" role="button" tabindex="-1"><span class="mceIcon mce_underline"></span><span id="jform_articletext_underline_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Underline (Ctrl+U)</span></a></td><td style="position: relative"><a title="Strikethrough" aria-labelledby="jform_articletext_strikethrough_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_strikethrough" href="#" id="jform_articletext_strikethrough" role="button" tabindex="-1"><span class="mceIcon mce_strikethrough"></span><span id="jform_articletext_strikethrough_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Strikethrough</span></a></td><td style="position: relative"><a title="Align full" aria-labelledby="jform_articletext_justifyfull_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_justifyfull" href="#" id="jform_articletext_justifyfull" role="button" tabindex="-1"><span class="mceIcon mce_justifyfull"></span><span id="jform_articletext_justifyfull_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Align full</span></a></td><td style="position: relative"><a title="Align center" aria-labelledby="jform_articletext_justifycenter_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_justifycenter" href="#" id="jform_articletext_justifycenter" role="button" tabindex="-1"><span class="mceIcon mce_justifycenter"></span><span id="jform_articletext_justifycenter_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Align center</span></a></td><td style="position: relative"><a title="Align left" aria-labelledby="jform_articletext_justifyleft_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_justifyleft" href="#" id="jform_articletext_justifyleft" role="button" tabindex="-1"><span class="mceIcon mce_justifyleft"></span><span id="jform_articletext_justifyleft_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Align left</span></a></td><td style="position: relative"><a title="Align right" aria-labelledby="jform_articletext_justifyright_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_justifyright" href="#" id="jform_articletext_justifyright" role="button" tabindex="-1"><span class="mceIcon mce_justifyright"></span><span id="jform_articletext_justifyright_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Align right</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Blockquote" aria-labelledby="jform_articletext_blockquote_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_blockquote" href="#" id="jform_articletext_blockquote" role="button" tabindex="-1"><span class="mceIcon mce_blockquote"></span><span id="jform_articletext_blockquote_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Blockquote</span></a></td><td class="mceToolbarEnd"><span><!-- IE --></span></td><td style="position: relative"><span aria-describedby="jform_articletext_formatselect_voiceDesc" aria-labelledby="jform_articletext_formatselect_voiceDesc" aria-haspopup="true" role="listbox"><table cellspacing="0" cellpadding="0" class="mceListBox mceListBoxEnabled mce_formatselect" id="jform_articletext_formatselect" tabindex="-1" role="presentation" aria-valuenow="Paragraph"><tbody><tr><td class="mceFirst"><span style="display:none;" class="voiceLabel" id="jform_articletext_formatselect_voiceDesc">Format - Paragraph</span><a onmousedown="return false;" onclick="return false;" class="mceText" href="#" tabindex="-1" id="jform_articletext_formatselect_text">Paragraph</a></td><td class="mceLast"><a onmousedown="return false;" onclick="return false;" class="mceOpen" href="#" tabindex="-1" id="jform_articletext_formatselect_open"><span><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></span></td><td style="position: relative"><span aria-describedby="jform_articletext_styleselect_voiceDesc" aria-labelledby="jform_articletext_styleselect_voiceDesc" aria-haspopup="true" role="listbox"><table cellspacing="0" cellpadding="0" class="mceListBox mceListBoxEnabled mce_styleselect" id="jform_articletext_styleselect" tabindex="-1" role="presentation" aria-valuenow="Styles"><tbody><tr><td class="mceFirst"><span style="display:none;" class="voiceLabel" id="jform_articletext_styleselect_voiceDesc">Styles</span><a onmousedown="return false;" onclick="return false;" class="mceText mceTitle" href="#" tabindex="-1" id="jform_articletext_styleselect_text">Styles</a></td><td class="mceLast"><a onmousedown="return false;" onclick="return false;" class="mceOpen" href="#" tabindex="-1" id="jform_articletext_styleselect_open"><span><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><a title="Remove formatting" aria-labelledby="jform_articletext_removeformat_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_removeformat" href="#" id="jform_articletext_removeformat" role="button" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span id="jform_articletext_removeformat_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Remove formatting</span></a></td><td style="position: relative"><a title="Cleanup HTML" aria-labelledby="jform_articletext_cleanup_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_cleanup" href="#" id="jform_articletext_cleanup" role="button" tabindex="-1"><span class="mceIcon mce_cleanup"></span><span id="jform_articletext_cleanup_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Cleanup HTML</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table align="" cellspacing="0" cellpadding="0" tabindex="-1" role="presentation" class="mceToolbar mceToolbarRow2 Enabled" id="jform_articletext_toolbar2" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span aria-describedby="jform_articletext_fontselect_voiceDesc" aria-labelledby="jform_articletext_fontselect_voiceDesc" aria-haspopup="true" role="listbox"><table cellspacing="0" cellpadding="0" class="mceListBox mceListBoxEnabled mce_fontselect" id="jform_articletext_fontselect" tabindex="-1" role="presentation" aria-valuenow="Font family"><tbody><tr><td class="mceFirst"><span style="display:none;" class="voiceLabel" id="jform_articletext_fontselect_voiceDesc">Font family</span><a onmousedown="return false;" onclick="return false;" class="mceText mceTitle" href="#" tabindex="-1" id="jform_articletext_fontselect_text">Font family</a></td><td class="mceLast"><a onmousedown="return false;" onclick="return false;" class="mceOpen" href="#" tabindex="-1" id="jform_articletext_fontselect_open"><span><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></span></td><td style="position: relative"><span aria-describedby="jform_articletext_fontsizeselect_voiceDesc" aria-labelledby="jform_articletext_fontsizeselect_voiceDesc" aria-haspopup="true" role="listbox"><table cellspacing="0" cellpadding="0" class="mceListBox mceListBoxEnabled mce_fontsizeselect" id="jform_articletext_fontsizeselect" tabindex="-1" role="presentation" aria-valuenow="Font size"><tbody><tr><td class="mceFirst"><span style="display:none;" class="voiceLabel" id="jform_articletext_fontsizeselect_voiceDesc">Font size</span><a onmousedown="return false;" onclick="return false;" class="mceText mceTitle" href="#" tabindex="-1" id="jform_articletext_fontsizeselect_text">Font size</a></td><td class="mceLast"><a onmousedown="return false;" onclick="return false;" class="mceOpen" href="#" tabindex="-1" id="jform_articletext_fontsizeselect_open"><span><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></span></td><td class="mceToolbarStart"><span><!-- IE --></span></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_forecolor_voice" tabindex="-1" role="button" id="jform_articletext_forecolor"><table cellspacing="0" cellpadding="0" title="Select text color" class="mceSplitButton mceSplitButtonEnabled mce_forecolor" role="presentation"><tbody><tr><td class="mceFirst"><a title="Select text color" onmousedown="return false;" onclick="return false;" class="mceAction mce_forecolor" href="#" tabindex="-1" id="jform_articletext_forecolor_action" role="button"><span class="mceAction mce_forecolor"></span><span style="display:none;" id="jform_articletext_forecolor_voice" class="mceVoiceLabel mceIconOnly">Select text color</span><div id="jform_articletext_forecolor_preview" class="mceColorPreview" style="background-color: rgb(0, 0, 0);"></div></a></td><td class="mceLast"><a title="Select text color" onmousedown="return false;" onclick="return false;" class="mceOpen mce_forecolor" href="#" tabindex="-1" id="jform_articletext_forecolor_open" role="button"><span class="mceOpen mce_forecolor"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_backcolor_voice" tabindex="-1" role="button" id="jform_articletext_backcolor"><table cellspacing="0" cellpadding="0" title="Select background color" class="mceSplitButton mceSplitButtonEnabled mce_backcolor" role="presentation"><tbody><tr><td class="mceFirst"><a title="Select background color" onmousedown="return false;" onclick="return false;" class="mceAction mce_backcolor" href="#" tabindex="-1" id="jform_articletext_backcolor_action" role="button"><span class="mceAction mce_backcolor"></span><span style="display:none;" id="jform_articletext_backcolor_voice" class="mceVoiceLabel mceIconOnly">Select background color</span><div id="jform_articletext_backcolor_preview" class="mceColorPreview" style="background-color: rgb(255, 255, 0);"></div></a></td><td class="mceLast"><a title="Select background color" onmousedown="return false;" onclick="return false;" class="mceOpen mce_backcolor" href="#" tabindex="-1" id="jform_articletext_backcolor_open" role="button"><span class="mceOpen mce_backcolor"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Cut" aria-labelledby="jform_articletext_cut_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_cut" href="#" id="jform_articletext_cut" role="button" tabindex="-1"><span class="mceIcon mce_cut"></span><span id="jform_articletext_cut_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Cut</span></a></td><td style="position: relative"><a title="Copy" aria-labelledby="jform_articletext_copy_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_copy" href="#" id="jform_articletext_copy" role="button" tabindex="-1"><span class="mceIcon mce_copy"></span><span id="jform_articletext_copy_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Copy</span></a></td><td style="position: relative"><a title="Paste" aria-labelledby="jform_articletext_paste_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_paste" href="#" id="jform_articletext_paste" role="button" tabindex="-1"><span class="mceIcon mce_paste"></span><span id="jform_articletext_paste_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Paste</span></a></td><td style="position: relative"><a title="Paste as Plain Text" aria-labelledby="jform_articletext_pastetext_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_pastetext" href="#" id="jform_articletext_pastetext" role="button" tabindex="-1"><span class="mceIcon mce_pastetext"></span><span id="jform_articletext_pastetext_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Paste as Plain Text</span></a></td><td style="position: relative"><a title="Indent" aria-labelledby="jform_articletext_indent_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_indent" href="#" id="jform_articletext_indent" role="button" tabindex="-1"><span class="mceIcon mce_indent"></span><span id="jform_articletext_indent_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Indent</span></a></td><td style="position: relative"><a title="Outdent" aria-labelledby="jform_articletext_outdent_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_outdent mceButtonDisabled" href="#" id="jform_articletext_outdent" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span id="jform_articletext_outdent_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Outdent</span></a></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_numlist_voice" tabindex="-1" role="button" id="jform_articletext_numlist"><table cellspacing="0" cellpadding="0" title="Ordered list" class="mceSplitButton mceSplitButtonEnabled mce_numlist" role="presentation"><tbody><tr><td class="mceFirst"><a title="Ordered list" onmousedown="return false;" onclick="return false;" class="mceAction mce_numlist" href="#" tabindex="-1" id="jform_articletext_numlist_action" role="button"><span class="mceAction mce_numlist"></span><span style="display:none;" id="jform_articletext_numlist_voice" class="mceVoiceLabel mceIconOnly">Ordered list</span></a></td><td class="mceLast"><a title="Ordered list" onmousedown="return false;" onclick="return false;" class="mceOpen mce_numlist" href="#" tabindex="-1" id="jform_articletext_numlist_open" role="button"><span class="mceOpen mce_numlist"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_bullist_voice" tabindex="-1" role="button" id="jform_articletext_bullist"><table cellspacing="0" cellpadding="0" title="Unordered list" class="mceSplitButton mceSplitButtonEnabled mce_bullist" role="presentation"><tbody><tr><td class="mceFirst"><a title="Unordered list" onmousedown="return false;" onclick="return false;" class="mceAction mce_bullist" href="#" tabindex="-1" id="jform_articletext_bullist_action" role="button"><span class="mceAction mce_bullist"></span><span style="display:none;" id="jform_articletext_bullist_voice" class="mceVoiceLabel mceIconOnly">Unordered list</span></a></td><td class="mceLast"><a title="Unordered list" onmousedown="return false;" onclick="return false;" class="mceOpen mce_bullist" href="#" tabindex="-1" id="jform_articletext_bullist_open" role="button"><span class="mceOpen mce_bullist"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a title="Subscript" aria-labelledby="jform_articletext_sub_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_sub" href="#" id="jform_articletext_sub" role="button" tabindex="-1"><span class="mceIcon mce_sub"></span><span id="jform_articletext_sub_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Subscript</span></a></td><td style="position: relative"><a title="Superscript" aria-labelledby="jform_articletext_sup_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_sup" href="#" id="jform_articletext_sup" role="button" tabindex="-1"><span class="mceIcon mce_sup"></span><span id="jform_articletext_sup_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Superscript</span></a></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_textcase_voice" tabindex="-1" role="button" id="jform_articletext_textcase" aria-disabled="true" class="mceSplitButtonDisabled"><table cellspacing="0" cellpadding="0" title="Uppercase" class="mceSplitButton mceSplitButtonEnabled mce_textcase" role="presentation"><tbody><tr><td class="mceFirst"><a title="Uppercase" onmousedown="return false;" onclick="return false;" class="mceAction mce_textcase" href="#" tabindex="-1" id="jform_articletext_textcase_action" role="button"><span class="mceAction mce_textcase"></span><span style="display:none;" id="jform_articletext_textcase_voice" class="mceVoiceLabel mceIconOnly">Uppercase</span></a></td><td class="mceLast"><a title="Uppercase" onmousedown="return false;" onclick="return false;" class="mceOpen mce_textcase" href="#" tabindex="-1" id="jform_articletext_textcase_open" role="button"><span class="mceOpen mce_textcase"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a title="Insert custom character" aria-labelledby="jform_articletext_charmap_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_charmap" href="#" id="jform_articletext_charmap" role="button" tabindex="-1"><span class="mceIcon mce_charmap"></span><span id="jform_articletext_charmap_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert custom character</span></a></td><td style="position: relative"><a title="Insert horizontal ruler" aria-labelledby="jform_articletext_hr_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_hr" href="#" id="jform_articletext_hr" role="button" tabindex="-1"><span class="mceIcon mce_hr"></span><span id="jform_articletext_hr_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert horizontal ruler</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table align="" cellspacing="0" cellpadding="0" tabindex="-1" role="presentation" class="mceToolbar mceToolbarRow3 Enabled" id="jform_articletext_toolbar3" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a title="Direction left to right" aria-labelledby="jform_articletext_ltr_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_ltr" href="#" id="jform_articletext_ltr" role="button" tabindex="-1"><span class="mceIcon mce_ltr"></span><span id="jform_articletext_ltr_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Direction left to right</span></a></td><td style="position: relative"><a title="Direction right to left" aria-labelledby="jform_articletext_rtl_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_rtl" href="#" id="jform_articletext_rtl" role="button" tabindex="-1"><span class="mceIcon mce_rtl"></span><span id="jform_articletext_rtl_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Direction right to left</span></a></td><td style="position: relative"><a title="Toggle fullscreen mode" aria-labelledby="jform_articletext_fullscreen_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_fullscreen" href="#" id="jform_articletext_fullscreen" role="button" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_fullscreen"></span><span id="jform_articletext_fullscreen_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Toggle fullscreen mode</span></a></td><td style="position: relative"><a title="Preview" aria-labelledby="jform_articletext_preview_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_preview" href="#" id="jform_articletext_preview" role="button" tabindex="-1"><span class="mceIcon mce_preview"></span><span id="jform_articletext_preview_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Preview</span></a></td><td style="position: relative"><a title="Source Code Editor" aria-labelledby="jform_articletext_source_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_source" href="#" id="jform_articletext_source" role="button" tabindex="-1"><span class="mceIcon mce_source"></span><span id="jform_articletext_source_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Source Code Editor</span></a></td><td style="position: relative"><a title="Print" aria-labelledby="jform_articletext_print_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_print" href="#" id="jform_articletext_print" role="button" tabindex="-1"><span class="mceIcon mce_print"></span><span id="jform_articletext_print_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Print</span></a></td><td style="position: relative"><a title="Find" aria-labelledby="jform_articletext_search_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_search" href="#" id="jform_articletext_search" role="button" tabindex="-1"><span class="mceIcon mce_search"></span><span id="jform_articletext_search_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Find</span></a></td><td style="position: relative"><a title="Find/Replace" aria-labelledby="jform_articletext_replace_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_replace" href="#" id="jform_articletext_replace" role="button" tabindex="-1"><span class="mceIcon mce_replace"></span><span id="jform_articletext_replace_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Find/Replace</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><div aria-haspopup="true" aria-labelledby="jform_articletext_table_insert_voice" tabindex="-1" role="button" id="jform_articletext_table_insert"><table cellspacing="0" cellpadding="0" title="Inserts a new table" class="mceSplitButton mceSplitButtonEnabled mce_table_insert" role="presentation"><tbody><tr><td class="mceFirst"><a title="Inserts a new table" onmousedown="return false;" onclick="return false;" class="mceAction mce_table_insert" href="#" tabindex="-1" id="jform_articletext_table_insert_action" role="button"><span class="mceAction mce_table_insert"></span><span style="display:none;" id="jform_articletext_table_insert_voice" class="mceVoiceLabel mceIconOnly">Inserts a new table</span></a></td><td class="mceLast"><a title="Inserts a new table" onmousedown="return false;" onclick="return false;" class="mceOpen mce_table_insert" href="#" tabindex="-1" id="jform_articletext_table_insert_open" role="button"><span class="mceOpen mce_table_insert"><span aria-hidden="true" class="mceIconOnly" style="display:none;">?</span></span></a></td></tr></tbody></table></div></td><td style="position: relative"><a title="Delete table" aria-labelledby="jform_articletext_delete_table_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_delete_table mceButtonDisabled" href="#" id="jform_articletext_delete_table" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_delete_table"></span><span id="jform_articletext_delete_table_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Delete table</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Table row properties" aria-labelledby="jform_articletext_row_props_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_row_props mceButtonDisabled" href="#" id="jform_articletext_row_props" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_row_props"></span><span id="jform_articletext_row_props_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Table row properties</span></a></td><td style="position: relative"><a title="Table cell properties" aria-labelledby="jform_articletext_cell_props_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_cell_props mceButtonDisabled" href="#" id="jform_articletext_cell_props" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_cell_props"></span><span id="jform_articletext_cell_props_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Table cell properties</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Insert row before" aria-labelledby="jform_articletext_row_before_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_row_before mceButtonDisabled" href="#" id="jform_articletext_row_before" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_row_before"></span><span id="jform_articletext_row_before_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert row before</span></a></td><td style="position: relative"><a title="Insert row after" aria-labelledby="jform_articletext_row_after_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_row_after mceButtonDisabled" href="#" id="jform_articletext_row_after" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_row_after"></span><span id="jform_articletext_row_after_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert row after</span></a></td><td style="position: relative"><a title="Delete row" aria-labelledby="jform_articletext_delete_row_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_delete_row mceButtonDisabled" href="#" id="jform_articletext_delete_row" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_delete_row"></span><span id="jform_articletext_delete_row_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Delete row</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Insert column before" aria-labelledby="jform_articletext_col_before_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_col_before mceButtonDisabled" href="#" id="jform_articletext_col_before" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_col_before"></span><span id="jform_articletext_col_before_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert column before</span></a></td><td style="position: relative"><a title="Insert column after" aria-labelledby="jform_articletext_col_after_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_col_after mceButtonDisabled" href="#" id="jform_articletext_col_after" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_col_after"></span><span id="jform_articletext_col_after_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert column after</span></a></td><td style="position: relative"><a title="Remove column" aria-labelledby="jform_articletext_delete_col_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_delete_col mceButtonDisabled" href="#" id="jform_articletext_delete_col" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_delete_col"></span><span id="jform_articletext_delete_col_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Remove column</span></a></td><td style="position: relative"><span tabindex="-1" aria-orientation="vertical" role="separator" class="mceSeparator"></span></td><td style="position: relative"><a title="Split merged table cells" aria-labelledby="jform_articletext_split_cells_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_split_cells mceButtonDisabled" href="#" id="jform_articletext_split_cells" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_split_cells"></span><span id="jform_articletext_split_cells_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Split merged table cells</span></a></td><td style="position: relative"><a title="Merge table cells" aria-labelledby="jform_articletext_merge_cells_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_merge_cells mceButtonDisabled" href="#" id="jform_articletext_merge_cells" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_merge_cells"></span><span id="jform_articletext_merge_cells_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Merge table cells</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table align="" cellspacing="0" cellpadding="0" tabindex="-1" role="presentation" class="mceToolbar mceToolbarRow4 Enabled" id="jform_articletext_toolbar4" aria-disabled="false" aria-pressed="false"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a title="Toggle guidelines/invisible elements" aria-labelledby="jform_articletext_visualaid_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_visualaid" href="#" id="jform_articletext_visualaid" role="button" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_visualaid"></span><span id="jform_articletext_visualaid_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Toggle guidelines/invisible elements</span></a></td><td style="position: relative"><a title="Visual control characters on/off." aria-labelledby="jform_articletext_visualchars_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_visualchars" href="#" id="jform_articletext_visualchars" role="button" tabindex="-1"><span class="mceIcon mce_visualchars"></span><span id="jform_articletext_visualchars_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Visual control characters on/off.</span></a></td><td style="position: relative"><a title="Show/hide block elements" aria-labelledby="jform_articletext_visualblocks_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_visualblocks" href="#" id="jform_articletext_visualblocks" role="button" tabindex="-1"><span class="mceIcon mce_visualblocks"></span><span id="jform_articletext_visualblocks_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Show/hide block elements</span></a></td><td style="position: relative"><a title="Insert non-breaking space character" aria-labelledby="jform_articletext_nonbreaking_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_nonbreaking" href="#" id="jform_articletext_nonbreaking" role="button" tabindex="-1"><span class="mceIcon mce_nonbreaking"></span><span id="jform_articletext_nonbreaking_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert non-breaking space character</span></a></td><td style="position: relative"><a title="Edit CSS Style" aria-labelledby="jform_articletext_style_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_style mceButtonDisabled" href="#" id="jform_articletext_style" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_style"></span><span id="jform_articletext_style_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Edit CSS Style</span></a></td><td style="position: relative"><a title="Citation" aria-labelledby="jform_articletext_cite_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_cite mceButtonDisabled" href="#" id="jform_articletext_cite" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_cite"></span><span id="jform_articletext_cite_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Citation</span></a></td><td style="position: relative"><a title="Abbreviation" aria-labelledby="jform_articletext_abbr_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_abbr mceButtonDisabled" href="#" id="jform_articletext_abbr" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_abbr"></span><span id="jform_articletext_abbr_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Abbreviation</span></a></td><td style="position: relative"><a title="Acronym" aria-labelledby="jform_articletext_acronym_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_acronym mceButtonDisabled" href="#" id="jform_articletext_acronym" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_acronym"></span><span id="jform_articletext_acronym_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Acronym</span></a></td><td style="position: relative"><a title="Deletion" aria-labelledby="jform_articletext_del_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_del mceButtonDisabled" href="#" id="jform_articletext_del" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_del"></span><span id="jform_articletext_del_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Deletion</span></a></td><td style="position: relative"><a title="Insertion" aria-labelledby="jform_articletext_ins_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_ins mceButtonDisabled" href="#" id="jform_articletext_ins" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_ins"></span><span id="jform_articletext_ins_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insertion</span></a></td><td style="position: relative"><a title="Insert/Edit Attributes" aria-labelledby="jform_articletext_attribs_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_attribs" href="#" id="jform_articletext_attribs" role="button" tabindex="-1" aria-disabled="false"><span class="mceIcon mce_attribs"></span><span id="jform_articletext_attribs_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert/Edit Attributes</span></a></td><td style="position: relative"><a title="Insert/edit anchor" aria-labelledby="jform_articletext_anchor_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_anchor" href="#" id="jform_articletext_anchor" role="button" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_anchor"></span><span id="jform_articletext_anchor_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert/edit anchor</span></a></td><td style="position: relative"><a title="Unlink" aria-labelledby="jform_articletext_unlink_voice" onclick="return false;" onmousedown="return false;" class="mceButton mce_unlink mceButtonDisabled" href="#" id="jform_articletext_unlink" role="button" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span id="jform_articletext_unlink_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Unlink</span></a></td><td style="position: relative"><a title="Insert/Edit link" aria-labelledby="jform_articletext_link_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_link" href="#" id="jform_articletext_link" role="button" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_link"></span><span id="jform_articletext_link_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert/Edit link</span></a></td><td style="position: relative"><a title="Insert/Edit image" aria-labelledby="jform_articletext_imgmanager_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_imgmanager" href="#" id="jform_articletext_imgmanager" role="button" tabindex="-1"><span class="mceIcon mce_imgmanager"></span><span id="jform_articletext_imgmanager_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert/Edit image</span></a></td><td style="position: relative"><a title="Toggle spellchecker" aria-labelledby="jform_articletext_spellchecker_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_spellchecker" href="#" id="jform_articletext_spellchecker" role="button" tabindex="-1"><span class="mceIcon mce_spellchecker"></span><span id="jform_articletext_spellchecker_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Toggle spellchecker</span></a></td><td style="position: relative"><a title="Insert Read More" aria-labelledby="jform_articletext_readmore_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_readmore" href="#" id="jform_articletext_readmore" role="button" tabindex="-1"><span class="mceIcon mce_readmore"></span><span id="jform_articletext_readmore_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert Read More</span></a></td><td style="position: relative"><a title="Insert / Edit Pagebreak" aria-labelledby="jform_articletext_pagebreak_voice" onclick="return false;" onmousedown="return false;" class="mceButton mceButtonEnabled mce_pagebreak" href="#" id="jform_articletext_pagebreak" role="button" tabindex="-1"><span class="mceIcon mce_pagebreak"></span><span id="jform_articletext_pagebreak_voice" style="display: none;" class="mceVoiceLabel mceIconOnly">Insert / Edit Pagebreak</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a onfocus="tinyMCE.getInstanceById('jform_articletext').focus();" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" accesskey="z" href="#"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe frameborder="0" id="jform_articletext_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Rich Text AreaPress ALT F10 for toolbar. Press ALT 0 for help." style="width: 100%; height: 387px; display: block;"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="jform_articletext_path_row" role="group" aria-labelledby="jform_articletext_path_voice" class="mcePathRow" style="display: block;" tabindex="-1"><span id="jform_articletext_path_voice" class="mcePathLabel">Path: </span><span id="jform_articletext_path" class="mcePathPath"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_35" tabindex="-1">p</a></span></div><a id="jform_articletext_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a><div style="float: right; display: block;">Words: <span id="jform_articletext-word-count">0</span></div></td></tr></tbody></table></div>
<div class="btn-toolbar pull-left" id="editor-xtd-buttons">

<div class="btn-toolbar">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" onclick="IeCursorFix(); return false;" href="http://localhost/nova/administrator/index.php?option=com_content&amp;view=articles&amp;layout=modal&amp;tmpl=component&amp;1e660f08901e4d355338d962a60a3e18=1" title="Article" class="modal-button btn"><i class="icon-file-add"></i> Article</a><a rel="{handler: 'iframe', size: {x: 800, y: 500}}" onclick="IeCursorFix(); return false;" href="http://localhost/nova/administrator/index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;e_name=jform_articletext&amp;asset=com_content&amp;author=" title="Image" class="modal-button btn"><i class="icon-picture"></i> Image</a></div>
</div>
				</fieldset>
			</div>
			<div class="span3">
				<fieldset class="form-vertical">

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip required" for="jform_catid" id="jform_catid-lbl" data-original-title="&lt;strong&gt;Category&lt;/strong&gt;&lt;br /&gt;The category that this item is assigned to.">Category<span class="star">&nbsp;*</span></label></div>
		<div class="controls"><select aria-required="true" required="" name="jform[catid]" id="jform_catid" style="display: none;" class="chzn-done">
	<option value="2">- Uncategorised</option>
	<option value="14">- Document-Blog</option>
	<option value="8">- - Java Development</option>
	<option value="9">- - Android </option>
	<option value="10">- - Cordova/Phonegap</option>
	<option value="11">- - Phonegap</option>
	<option value="12">- - Sencha</option>
	<option value="13">- - PHP Development</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="jform_catid_chzn"><a tabindex="-1" class="chzn-single"><span>- Uncategorised</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>




<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_state" id="jform_state-lbl" data-original-title="&lt;strong&gt;Status&lt;/strong&gt;&lt;br /&gt;Set publication status.">Status</label></div>
		<div class="controls"><select size="1" class="chzn-color-state chzn-done" name="jform[state]" id="jform_state" style="display: none;">
	<option selected="selected" value="1">Published</option>
	<option value="0">Unpublished</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="jform_state_chzn"><a tabindex="-1" class="chzn-single chzn-color-state" rel="value_1"><span>Published</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>

</fieldset>
</div>
</div>
		
</div>
							
<div class="tab-pane" id="publishing">
			<div class="row-fluid form-horizontal-desktop">
				<div class="span12">
					


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_created" id="jform_created-lbl" data-original-title="&lt;strong&gt;Created Date&lt;/strong&gt;">Created Date</label></div>
		<div class="controls"><div class="input-append"><input type="text" class="input-medium hasTooltip" maxlength="45" size="22" value="" id="jform_created" name="jform[created]" title="" data-original-title=""><button id="jform_created_img" class="btn" type="button"><i class="icon-calendar"></i></button></div></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_created_by" id="jform_created_by-lbl" data-original-title="&lt;strong&gt;Created by&lt;/strong&gt;&lt;br /&gt;Select the name of the user who created the article.">Created by</label></div>
		<div class="controls"><div class="input-append">
	<input type="text" readonly="" value="Select a User" id="jform_created_by">
		<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_users&amp;view=users&amp;layout=modal&amp;tmpl=component&amp;field=jform_created_by" title="Select User" class="btn btn-primary modal_jform_created_by">
<i class="icon-user"></i></a>
</div>
<input type="hidden" value="" name="jform[created_by]" id="jform_created_by_id"></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_created_by_alias" id="jform_created_by_alias-lbl" data-original-title="&lt;strong&gt;Created by alias&lt;/strong&gt;&lt;br /&gt;Enter an alias to be displayed instead of the name of the user who created the article.">Created by alias</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_created_by_alias" name="jform[created_by_alias]"></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_modified" id="jform_modified-lbl" data-original-title="&lt;strong&gt;Modified Date&lt;/strong&gt;&lt;br /&gt;The date and time that the article was last modified.">Modified Date</label></div>
		<div class="controls"><div><input type="text" readonly="readonly" class="readonly hasTooltip" maxlength="45" size="22" value="" id="jform_modified" name="jform[modified]" title="" data-original-title=""><button style="display:none;" id="jform_modified_img" class="btn" type="button"><i class="icon-calendar"></i></button></div></div>
</div>


<div class="control-group ">
			<div class="control-label"><label class="" for="jform_modified_by" id="jform_modified_by-lbl">Modified by</label></div>
		<div class="controls"><div class="input-append">
	<input type="text" class="readonly" readonly="" value="Select a User" id="jform_modified_by">
</div>
<input type="hidden" value="" name="jform[modified_by]" id="jform_modified_by_id"></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_version" id="jform_version-lbl" data-original-title="&lt;strong&gt;Revision&lt;/strong&gt;&lt;br /&gt;A count of the number of times this article has been revised.">Revision</label></div>
		<div class="controls"><input type="text" readonly="" size="6" class="readonly" value="" id="jform_version" name="jform[version]"></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_hits" id="jform_hits-lbl" data-original-title="&lt;strong&gt;Hits&lt;/strong&gt;&lt;br /&gt;Number of hits for this article">Hits</label></div>
		<div class="controls"><input type="text" readonly="" size="6" class="readonly" value="" id="jform_hits" name="jform[hits]"></div>
</div>


<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_id" id="jform_id-lbl" data-original-title="&lt;strong&gt;ID&lt;/strong&gt;&lt;br /&gt;Record number in the database">ID</label></div>
		<div class="controls"><input type="text" readonly="" size="10" class="readonly" value="0" id="jform_id" name="jform[id]"></div>
</div>
</div>			

</div>
			
</div>		
							
<div class="tab-pane" id="images">
			<div class="row-fluid form-horizontal-desktop">
				<div class="span12">
																

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_intro" id="jform_images_image_intro-lbl" data-original-title="&lt;strong&gt;Intro Image&lt;/strong&gt;&lt;br /&gt;Image for the intro text layouts such as blogs and featured">Intro Image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_intro" name="jform[images][image_intro]">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_content&amp;author=&amp;fieldid=jform_images_image_intro&amp;folder=" title="Select" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_intro');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_float_intro" id="jform_images_float_intro-lbl" data-original-title="&lt;strong&gt;Image Float&lt;/strong&gt;&lt;br /&gt;Controls placement of the image">Image Float</label></div>
		<div class="controls"><select name="jform[images][float_intro]" id="jform_images_float_intro" style="display: none;" class="chzn-done">
	<option selected="selected" value="">Use Global</option>
	<option value="right">Right</option>
	<option value="left">Left</option>
	<option value="none">None</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="jform_images_float_intro_chzn"><a tabindex="-1" class="chzn-single"><span>Use Global</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_intro_alt" id="jform_images_image_intro_alt-lbl" data-original-title="&lt;strong&gt;Alt text&lt;/strong&gt;&lt;br /&gt;Alternative text used for visitors without access to images. Replaced with caption text if it is present.">Alt text</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_intro_alt" name="jform[images][image_intro_alt]"></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_intro_caption" id="jform_images_image_intro_caption-lbl" data-original-title="&lt;strong&gt;Caption&lt;/strong&gt;&lt;br /&gt;Caption attached to the image">Caption</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_intro_caption" name="jform[images][image_intro_caption]"></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><span class="spacer"><span class="before"></span><span><hr></span><span class="after"></span></span></div>
		<div class="controls"> </div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext" id="jform_images_image_fulltext-lbl" data-original-title="&lt;strong&gt;Full article image&lt;/strong&gt;&lt;br /&gt;Image for the single article display">Full article image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_fulltext" name="jform[images][image_fulltext]">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_content&amp;author=&amp;fieldid=jform_images_image_fulltext&amp;folder=" title="Select" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_fulltext');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_float_fulltext" id="jform_images_float_fulltext-lbl" data-original-title="&lt;strong&gt;Image Float&lt;/strong&gt;&lt;br /&gt;Controls placement of the image">Image Float</label></div>
		<div class="controls"><select name="jform[images][float_fulltext]" id="jform_images_float_fulltext" style="display: none;" class="chzn-done">
	<option selected="selected" value="">Use Global</option>
	<option value="right">Right</option>
	<option value="left">Left</option>
	<option value="none">None</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="jform_images_float_fulltext_chzn"><a tabindex="-1" class="chzn-single"><span>Use Global</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext_alt" id="jform_images_image_fulltext_alt-lbl" data-original-title="&lt;strong&gt;Alt text&lt;/strong&gt;&lt;br /&gt;Alternative text used for visitors without access to images. Replaced with caption text if it is present.">Alt text</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_fulltext_alt" name="jform[images][image_fulltext_alt]"></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext_caption" id="jform_images_image_fulltext_caption-lbl" data-original-title="&lt;strong&gt;Caption&lt;/strong&gt;&lt;br /&gt;Caption attached to the image">Caption</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_fulltext_caption" name="jform[images][image_fulltext_caption]"></div>
</div>
</div>

			</div>
			
</div>				
</div>

<input type="hidden" value="" name="task">
<input type="hidden" value="" name="return">
		

</div>
</form>

</div>
</div>
						<!-- End Content -->
	</section>

	</div>