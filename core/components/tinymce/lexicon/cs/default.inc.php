<?php
/**
 * Czech TinyMCE language file
 *
 * @package tinymce
 * @language cs
 *
 * @author modxcms.cz
 * @updated 2011-10-12
 */
$_lang['tiny.toggle_editor'] = 'Použít WYSIWYG: ';
$_lang['setting_tiny.base_url'] = 'TinyMCE Document Base URL';
$_lang['setting_tiny.base_url_desc'] = 'Allows the setting of a base URL property to override the document_base_url TinyMCE settings. Useful for rootrelative environments.';
$_lang['setting_tiny.convert_fonts_to_spans'] = 'Convert Fonts to Spans';
$_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated.';
$_lang['setting_tiny.convert_newlines_to_brs'] = 'Convert Newlines to BRs';
$_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.';
$_lang['setting_tiny.css_selectors'] = 'CSS selektory';
$_lang['setting_tiny.css_selectors_desc'] = 'Seznam selektorů dostupný ve WYSIWYG editoru. Zadávejte je v následujícím tvaru:<br />"zobrazenýNázev=nazevSelektoru;zobrazenýNázev2=nazevSelektoru2"<br />Chceme-li mít např. selektory pro třídy <b>.mono</b> a <b>.malyText</b>, které máme v CSS souboru, zadáme je tedy takto:<br />"Neproporcionální text=mono;Malý text=malyText"<br />Pamatujte, že za posledním záznamem nesmí být středník.';
$_lang['setting_tiny.custom_buttons1'] = '1. řádek volitelných tlačítek';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro první řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';
$_lang['setting_tiny.custom_buttons2'] = '2. řádek volitelných tlačítek';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro druhou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';
$_lang['setting_tiny.custom_buttons3'] = '3. řádek volitelných tlačítek';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro třetí řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';
$_lang['setting_tiny.custom_buttons4'] = '4. řádek volitelných tlačítek';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro čtvrtou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';
$_lang['setting_tiny.custom_buttons5'] = '5. řádek volitelných tlačítek';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Zadejte tlačítka jako čárkou oddělený seznam tlačítek pro pátou řádku. Ujistěte se, že každé tlačítko má vyžadovaný plugin povolen ve "Volitelné pluginy".';
$_lang['setting_tiny.custom_plugins'] = 'Volitelné pluginy';
$_lang['setting_tiny.custom_plugins_desc'] = 'Čárkou oddělený seznam TinyMCE pluginů.';
$_lang['setting_tiny.editor_theme'] = 'Téma editoru';
$_lang['setting_tiny.element_format'] = 'Element Format';
$_lang['setting_tiny.element_format_desc'] = 'This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example <br /> will be <br> if you set this option to "html".';
$_lang['setting_tiny.entity_encoding'] = 'Entity Encoding';
$_lang['setting_tiny.entity_encoding_desc'] = 'This option controls how entities/characters get processed by TinyMCE. Available values are "named", "numeric" and "raw".';
$_lang['setting_tiny.fix_nesting'] = 'Auto-fix Nesting';
$_lang['setting_tiny.fix_nesting_desc'] = 'This option controls if invalid contents should be corrected before insertion in IE. IE has a bug that produced an invalid DOM tree if the input contents are not correct so this option tries to fix this using preprocessing of the HTML string. This option is disabled by default since it might be a bit slow.';
$_lang['setting_tiny.fix_table_elements'] = 'Auto-fix Table Elements';
$_lang['setting_tiny.fix_table_elements_desc'] = 'This option enables you to specify that table elements should be moved outside paragraphs or other block elements. If you enable this option block elements will be split into two chunks when a table is found within it. This option is disabled by default.';
$_lang['setting_tiny.font_size_classes'] = 'Font Size Classes';
$_lang['setting_tiny.font_size_classes_desc'] = 'This option allows specification of a comma separated list of class names that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of classes should be 7 items. This option is not used by default, but can be useful if you want to have custom classes for each font size for browser compatibility.';
$_lang['setting_tiny.font_size_style_values'] = 'Font Size Style Values';
$_lang['setting_tiny.font_size_style_values_desc'] = 'This option allows specification of a comma separated list of style values that is to be used when the user selects font sizes. This option is only used when the convert_fonts_to_spans option is enabled. This list of style values should be 7 items. This option is not used by default, but can be useful if you want to have custom CSS values for each font size for browser compatibility. Defaults to: xx-small,x-small,small,medium,large,x-large,xx-large.';
$_lang['setting_tiny.forced_root_block'] = 'Forced Root Block';
$_lang['setting_tiny.forced_root_block_desc'] = 'This option enables you to make sure that any non block elements or text nodes are wrapped in block elements. For example <strong>something</strong> will result in output like: <p><strong>something</strong></p>.';
$_lang['setting_tiny.indentation'] = 'Indentation';
$_lang['setting_tiny.indentation_desc'] = 'This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.';
$_lang['setting_tiny.invalid_elements'] = 'Invalid Elements';
$_lang['setting_tiny.invalid_elements_desc'] = 'This option should contain a comma separated list of element names to exclude from the content. Elements in this list will be removed when TinyMCE executes a cleanup.';
$_lang['setting_tiny.nowrap'] = 'Prevent Editor Wrap';
$_lang['setting_tiny.nowrap_desc'] = 'This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.';
$_lang['setting_tiny.object_resizing'] = 'Změna velikosti objektů';
$_lang['setting_tiny.object_resizing_desc'] = 'V této volbě lze umožnit schopnost změny velikosti tabulek a obrázků přímo v textu v prohlížečích Firefox/Mozilla. Ve výchozím stavu je nastavení aktivní.';
$_lang['setting_tiny.remove_linebreaks'] = 'Remove Linebreaks';
$_lang['setting_tiny.remove_linebreaks_desc'] = 'This option controls whether line break characters should be removed from output HTML.';
$_lang['setting_tiny.remove_redundant_brs'] = 'Remove Redundant BRs';
$_lang['setting_tiny.remove_redundant_brs_desc'] = 'This option is enabled by default and will control the output of trailing BR elements at the end of block elements. Since IE cannot render these properly we need to remove them by default to ensure proper output across all browsers. So for some browsers this BR at the end of the LI at the example below is redundant.';
$_lang['setting_tiny.removeformat_selector'] = 'RemoveFormat Selector';
$_lang['setting_tiny.removeformat_selector_desc'] = 'This option allows specification of which elements should be removed when you press the removeformat button. This is a CSS selector pattern.';
$_lang['setting_tiny.path_options'] = 'Možnosti cest';
$_lang['setting_tiny.path_options_desc'] = 'Jedno z "rootrelative", "docrelative" nebo "fullpathurl".';
$_lang['setting_tiny.table_inline_editing'] = 'Přímá úprava tabulek';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Touto volbou můžete povolit přímou editaci tabulek v prohlížečích Firefox/Mozilla. V závislosti na dokumentaci k TinyMCE, je tato volba občas problémová a občas vykazuje chyby, proto je tato volba ve výchozím nastavení vypnuta.';
$_lang['setting_tiny.template_list'] = 'Seznam šablon';
$_lang['setting_tiny.template_list_desc'] = 'Zadejte seznam šablon pro šablonovací plugin. Musejí být čárkou oddělené a dodržet následující formát názevŠablony:URL:popis. Např. Moje Šablona:assets/templates/mojesablona.html:Moje vlastní šablona.';
$_lang['setting_tiny.template_list_snippet'] = 'Template List Snippet';
$_lang['setting_tiny.template_list_snippet_desc'] = 'Enter the name of a snippet that will generate a list of templates compatible with the tiny.template_list format (name:URL:description). If a snippet is named, the results returned by the snippet call will be used rather than any value present in tiny.template_list';
$_lang['setting_tiny.template_selected_content_classes'] = 'Template Selected Content Classes';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML blokové elementy';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Čárkou oddělený seznam HTML tagů, které jsou zobrazeny v rozalovacím seznamu Formát. Tato volba je dostupná pouze pokud je použito téma "advanced".';
$_lang['setting_tiny.theme_advanced_font_sizes'] = 'Advanced Theme Font Sizes';
$_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'This option should contain a comma separated list of font sizes to include. Each item in the list should be a valid value for the font-style CSS property (10px, 12pt, 1em, etc.). Example: Big text=30px,Small text=small,My Text Size=.mytextsize';
$_lang['setting_tiny.skin'] = 'TinyMCE Skin';
$_lang['setting_tiny.skin_desc'] = 'Pomocí této volby si můžete zvolit skin použitý ve v daném tématu editoru. Skin je v podstatě CSS soubor, který se nahráje při načtení daného tématu z jeho adresáře. Téma "advanced", které ve výchozím stavu TinyMCE obsahuje dva skiny, "default" a "o2k7". Přidali jsme ještě skin "cirkuit", který se nyní nahrává ve výchozím stavu.';
$_lang['setting_tiny.skin_variant'] = 'TinyMCE varianta skinu';
$_lang['setting_tiny.skin_variant_desc'] = 'Touto možností můžete zvolit variantu skinu, např. "silver" nebo "black". "default" skin neobsahuje žádnou volitelnou variantu, skin "o2k7" nabízí k výchozí variantě varianty "silver" nebo "black". Pro skin "cirkuit" máme také variantu "silver". Při vytváření skinu, lze vytvořit i jeho varianty, přidáním souboru ui_[nazev_varianty].css jako variatnu k ui.css.';
$_lang['area_advanced-theme'] = 'Advanced Theme';
$_lang['area_cleanup-output'] = 'Cleanup/Output';
$_lang['area_custom-buttons'] = 'Custom Buttons';
$_lang['area_general'] = 'General';
$_lang['area_url'] = 'URL';
$_lang['area_callbacks'] = 'Callbacks';
$_lang['area_layout'] = 'Layout';