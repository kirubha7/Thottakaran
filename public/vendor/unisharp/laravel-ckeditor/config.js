/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert'	   groups: [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
		{ name: 'forms' 	   groups: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	config.bodyClass = 'contents';

	config.bodyId = 'contents_id';

	config.browserContextMenuOnCtrl = false;

	config.colorButton_enableMore = false;

	config.disableObjectResizing = true;

	config.editingBlock = false;

	config.enableTabKeyTools = false;

	config.image_removeLinkByEmptyURL = false;

	config.menu_groups = 'clipboard,table,anchor,link,image';

	config.smiley_path = 'http://www.example.com/images/smileys/';

	config.smiley_path = '/images/smileys/';

	config.entities_processNumerical = true;
	config.entities_processNumerical = 'force';

	config.extraPlugins = 'myplugin,anotherplugin';

	config.filebrowserBrowseUrl = '/browser/browse.php';

	config.filebrowserFlashBrowseUrl = '/browser/browse.php?type=Flash';

	config.filebrowserFlashUploadUrl = '/uploader/upload.php?type=Flash';

	config.filebrowserImageBrowseLinkUrl = '/browser/browse.php';

	config.filebrowserImageBrowseUrl = '/browser/browse.php?type=Images';

	config.filebrowserImageUploadUrl = '/uploader/upload.php?type=Images';

	config.filebrowserUploadUrl = '/uploader/upload.php';

	config.forceEnterMode = true;

	config.menu_groups = 'clipboard,table,anchor,link,image';

	config.readOnly = true;

	config.removeDialogTabs = 'flash:advanced;image:Link';

};
