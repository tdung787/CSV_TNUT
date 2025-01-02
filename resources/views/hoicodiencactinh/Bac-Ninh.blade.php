@extends('hoicodiencactinh.layout.Province')

@section('content')
<h1 class="fw-bold tits">Danh sách Hội Cơ điện tỉnh Bắc Ninh</h1>
<div class="text-justify" style="line-height:23px" id="Art_Pdesc">
    <!-- [if gte mso 9]><xml> <w:WordDocument> <w:Zoom>105</w:Zoom> <w:TrackMoves>false</w:TrackMoves> <w:TrackFormatting /> <w:ValidateAgainstSchemas /> <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid> <w:IgnoreMixedContent>false</w:IgnoreMixedContent> <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText> <w:DoNotPromoteQF /> <w:LidThemeOther>EN-US</w:LidThemeOther> <w:LidThemeAsian>X-NONE</w:LidThemeAsian> <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript> <w:Compatibility> <w:BreakWrappedTables /> <w:SplitPgBreakAndParaMark /> </w:Compatibility> <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel> <m:mathPr> <m:mathFont m:val="Cambria Math" /> <m:brkBin m:val="before" /> <m:brkBinSub m:val="&#45;-" /> <m:smallFrac m:val="off" /> <m:dispDef /> <m:lMargin m:val="0" /> <m:rMargin m:val="0" /> <m:defJc m:val="centerGroup" /> <m:wrapIndent m:val="1440" /> <m:intLim m:val="subSup" /> <m:naryLim m:val="undOvr" /> </m:mathPr></w:WordDocument> </xml><![endif]--><!-- [if gte mso 9]><xml> <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"   DefSemiHidden="true" DefQFormat="false" DefPriority="99"   LatentStyleCount="267"> <w:LsdException Locked="false" Priority="0" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Normal" /> <w:LsdException Locked="false" Priority="9" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="heading 1" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8" /> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9" /> <w:LsdException Locked="false" Priority="39" Name="toc 1" /> <w:LsdException Locked="false" Priority="39" Name="toc 2" /> <w:LsdException Locked="false" Priority="39" Name="toc 3" /> <w:LsdException Locked="false" Priority="39" Name="toc 4" /> <w:LsdException Locked="false" Priority="39" Name="toc 5" /> <w:LsdException Locked="false" Priority="39" Name="toc 6" /> <w:LsdException Locked="false" Priority="39" Name="toc 7" /> <w:LsdException Locked="false" Priority="39" Name="toc 8" /> <w:LsdException Locked="false" Priority="39" Name="toc 9" /> <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption" /> <w:LsdException Locked="false" Priority="10" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Title" /> <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font" /> <w:LsdException Locked="false" Priority="11" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Subtitle" /> <w:LsdException Locked="false" Priority="22" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Strong" /> <w:LsdException Locked="false" Priority="20" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Emphasis" /> <w:LsdException Locked="false" Priority="59" SemiHidden="false"    UnhideWhenUsed="false" Name="Table Grid" /> <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text" /> <w:LsdException Locked="false" Priority="1" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="No Spacing" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 1" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 1" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 1" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 1" /> <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision" /> <w:LsdException Locked="false" Priority="34" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="List Paragraph" /> <w:LsdException Locked="false" Priority="29" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Quote" /> <w:LsdException Locked="false" Priority="30" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Intense Quote" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 1" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 1" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 1" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 1" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 1" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 2" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 2" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 2" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 2" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 2" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 2" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 2" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 2" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 2" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 3" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 3" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 3" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 3" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 3" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 3" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 3" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 3" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 3" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 4" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 4" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 4" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 4" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 4" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 4" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 4" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 4" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 4" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 5" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 5" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 5" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 5" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 5" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 5" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 5" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 5" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 5" /> <w:LsdException Locked="false" Priority="60" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Shading Accent 6" /> <w:LsdException Locked="false" Priority="61" SemiHidden="false"    UnhideWhenUsed="false" Name="Light List Accent 6" /> <w:LsdException Locked="false" Priority="62" SemiHidden="false"    UnhideWhenUsed="false" Name="Light Grid Accent 6" /> <w:LsdException Locked="false" Priority="63" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6" /> <w:LsdException Locked="false" Priority="64" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6" /> <w:LsdException Locked="false" Priority="65" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 1 Accent 6" /> <w:LsdException Locked="false" Priority="66" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium List 2 Accent 6" /> <w:LsdException Locked="false" Priority="67" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6" /> <w:LsdException Locked="false" Priority="68" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6" /> <w:LsdException Locked="false" Priority="69" SemiHidden="false"    UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6" /> <w:LsdException Locked="false" Priority="70" SemiHidden="false"    UnhideWhenUsed="false" Name="Dark List Accent 6" /> <w:LsdException Locked="false" Priority="71" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Shading Accent 6" /> <w:LsdException Locked="false" Priority="72" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful List Accent 6" /> <w:LsdException Locked="false" Priority="73" SemiHidden="false"    UnhideWhenUsed="false" Name="Colorful Grid Accent 6" /> <w:LsdException Locked="false" Priority="19" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis" /> <w:LsdException Locked="false" Priority="21" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis" /> <w:LsdException Locked="false" Priority="31" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference" /> <w:LsdException Locked="false" Priority="32" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Intense Reference" /> <w:LsdException Locked="false" Priority="33" SemiHidden="false"    UnhideWhenUsed="false" QFormat="true" Name="Book Title" /> <w:LsdException Locked="false" Priority="37" Name="Bibliography" /> <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading" /> </w:LatentStyles> </xml><![endif]-->
<p>&nbsp;</p>
<!--[endif] --><!-- [if gte mso 9]><xml> <o:shapedefaults v:ext="edit" spidmax="1026" /> </xml><![endif]--><!-- [if gte mso 9]><xml> <o:shapelayout v:ext="edit"> <o:idmap v:ext="edit" data="1" /> </o:shapelayout></xml><![endif]-->
<div class="WordSection1">
<div>
<table class="tblprice table table-bordered" style="width: 100%;" width="100%">
<tbody>
<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 47.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">STT</span></strong></p>
</td>
<td style="width: 153.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">HỌ VÀ TÊN</span></strong></p>
</td>
<td style="width: 82.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">CHỨC VỤ TRONG HỘI</span></strong></p>
</td>
<td style="width: 62.15pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">KHÓA HỌC</span></strong></p>
</td>
<td style="width: 213.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">CHỨC VỤ VÀ NƠI CÔNG TÁC HIỆN TẠI</span></strong></p>
</td>
<td style="width: 87.1pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp;">ĐIỆN THOẠI DI ĐỘNG</span></strong></p>
</td>
<td style="width: 145.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 0cm 0cm 0cm; height: 47.25pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><strong><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;">EMAIL</span></strong></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; height: 47.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">1</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trịnh Văn Xuyền</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Hội trưởng</p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K6M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0987818037</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 47.25pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="text-decoration: underline;"><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;"><a href="mailto:xuyentrv@gmail.com"><span style="color: windowtext;">xuyentrv@gmail.com</span></a></span></span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 2; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">2</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Quốc Thịnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" valign="top" width="109">
<p class="MsoNormal">Ủy viên BCH hội</p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lilama 69-1</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913026952</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 3; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">3</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Cao Nam Hải</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" valign="top" width="109">
<p class="MsoNormal">Ủy viên BCH hội</p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K24I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912697127</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 4; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">4</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Thành Trì</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" valign="top" width="109">
<p class="MsoNormal">Ủy viên BCH hội</p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K20M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913596579</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 5; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">5</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Khang</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" valign="top" width="109">
<p class="MsoNormal">Ủy viên BCH hội</p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nhà máy Quy Chế Từ Sơn</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912879332</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 6; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">6</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Văn Minh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K1SK</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường cao đẳng nghề cơ điện - Xây Dựng Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0948863368</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 7; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">7</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Dương Văn Nhàn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K2M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty xây dựng An Huy</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">09161425068</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 8; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">8</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Văn Chỉnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K2M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">01684187225</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 9; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">9</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Ngọc Lãnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K2M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty may Tân Phúc</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913259812</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 10; height: 33.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">10</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hữu Lan</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K3M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">01696929174</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 33.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 11; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">11</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Tô Thị Kiệm</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K4M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">NR: 02413826092</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 12; height: 33.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">12</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Vượng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K51</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0982668074</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 33.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 13; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">13</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Tiến Thắng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phân xưởng 110 KV, Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 14; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">14</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Đào Thị Phương</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">NR: 02413824041</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 15; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">15</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Đức Quảnng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912232794</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 16; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">16</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trương Văn Lượt</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913260056</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 17; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">17</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Tiến</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0988562786</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 18; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">18</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Đinh Xuân Lượng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nhà máy Quy Chế Từ Sơn</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912597126</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 19; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">19</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Phúc</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K5M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0988770638</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 20; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">20</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Văn Dũng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K6M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913259135</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 21; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">21</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Tất Nhân</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K6M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913083493</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 22; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">22</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Hiếu</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K7M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Cơ Sở Khoa Học và Công Nghệ Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912878308</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 23; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">23</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Hiếu</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K7M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Cơ Sở Khoa Học và Công Nghệ Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912878308</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 24; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">24</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Hiếu</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K7M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Cơ Sở Khoa Học và Công Nghệ Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912878307</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 25; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">25</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Nhật Đăng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K9I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng kỹ Thuật, Nhà máy Quy Chế Từ Sơn.</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 26; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">26</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Mạnh Hùng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K9I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0904697561</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 27; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">27</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Kim Tiến</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K12I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">XN Thủy nông Tiên Du, Thị Trấn Lim, Tiên Du, Bắc Ninh.</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0915379721</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 28; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">28</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Thanh Khiết</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K12M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kỹ thuật, Nhà máy Quy Chế, Từ Sơn, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 02413740198</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 29; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">29</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Cơ</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K12M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty gạch Viglacera Từ Sơn, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913356291</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 30; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">30</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lê Danh Lợi</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">NR: 3.826.391</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 31; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">31</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Văn Thụ</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0904505855</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 32; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">32</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Bùi Quang Vinh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Lilama 691 Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913260995</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 33; height: 36.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">33</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Phúc Tuấn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ban Tổ chức Thành ủy, TP.Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 36.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 36.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 34; height: 47.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">34</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Khắc Dụng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường Đại Học Thể Dục Thể Thao Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">NR: 02413.741.903</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 47.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 35; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">35</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Thế Trường</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K13M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kỹ thuật, nhà máy Quy Chế Từ Sơn, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912178072</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 36; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">36</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Lương Kim</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Điện lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913257183</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 37; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">37</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Công Yên</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ban quản lý Khu Công Nghiệp Thành Phố Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0982052367</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 38; height: 34.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">38</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Thanh Hà</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nhà máy Thuốc lá Bắc Sơn ,Đáp Cầu,TP.Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0983228670</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 34.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 39; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">39</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hùng Biên Sơn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty liên doanh Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912394914</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 40; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">40</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Hạnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912320974</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 41; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">41</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Hoa</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K14M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Liên Doanh Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 42; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">42</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Thịnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K15I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nhà máy liên doanh thiết bị điện Miền Bắc, KCN Quế Võ</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913596454</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="text-decoration: underline;"><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;">moitruongxanh@yahoo.com</span></span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 43; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">43</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lê Văn Lim</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K16M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0945328222</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 44; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">44</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Mạnh San</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K17I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912459186</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 45; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">45</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Thân Trọng Đại</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K24I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0988935798</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 46; height: 28.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">46</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Tiến Cường</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K24I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912864336</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 28.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 47; height: 28.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">47</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lê Văn Quang</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K24I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913504483</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 28.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 48; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">48</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Thắng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K24M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 49; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">49</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Văn Hà</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K25M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty CP Kính VIGLACERA Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 3863702</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 50; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">50</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đoàn Quang</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K26I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ban Quản lý dự án, Công ty Điện 1 Hà Nội</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913076110</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 51; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">51</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Văn Hữu Bình</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K26I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 02413851301</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 52; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">52</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Ngọc Tuyến</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K27I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0914521172</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 53; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">53</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Ngọc Tuyến</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K27I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0914521172</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 54; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">54</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lê Anh Đức</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K27I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kỹ thuật, Điện lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913348478</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 55; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">55</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Thái Hà</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K28I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kinh doanh Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 56; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">56</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Khắc Việt Đức</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K29I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Điều độ Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0963961975</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 57; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">57</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Nghị</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K33I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Điều độ Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 3 821 320</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 58; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">58</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Hạnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K33I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0988114502</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="text-decoration: underline;"><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;">hanhnd@yahoo.com</span></span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 59; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">59</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Tuấn Pháp</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K33IB</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần may Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912404854</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 60; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">60</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Duy Kiên</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K34I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Điều độ Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 61; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">61</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Ngọc Trung</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K34I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Quản Lý Xây Dựng Điện Lực Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0963156888</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 62; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">62</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Hồ Bắc Hải</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K35I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Sở Công Thương, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0983172569</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 63; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">63</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Công Hoàng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K36I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0963782888</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 64; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">64</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễ Đình Mạnh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K36I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kỹ thuật, Sở Công thương Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0904566579</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 65; height: 47.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">65</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hữu Vụ</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K36I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường Cao Đẳng Công Nghiệp Hưng Yên Cơ Sở 2: Từ Sơn Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 47.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0982536466</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 47.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 66; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">66</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Đinh Hữu Toại</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K36M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phòng Kỹ thuật, Nhà máy Quy Chế Từ Sơn, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0988053114</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 67; height: 33.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">67</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Đặng Hữu Vương</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">K39I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0972883298</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 33.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 68; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">68</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Văn Thơm</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC01BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0986251429</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 69; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">69</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Trung Kiên</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">01237443856</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 70; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">70</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Xuân Biên</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty vật tư tổng hợp Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912476436</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 71; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">71</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Thiện</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường Trung Cấp Xây Dựng Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912469143</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 72; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">72</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Bảo</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Viện Quân Y 110, Thị Cầu Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0983409429</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 73; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">73</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Thanh Hải</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0945373159</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 74; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">74</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Sỹ Hồng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">01686418256</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 75; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">75</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hữu Sao</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Gạch tuynen Minh Phú, Hiệp Hòa, Bắc Giang.</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912207582</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 76; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">76</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Hải</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0983810872</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 77; height: 30.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">77</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Lăng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 02413508997</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.0pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 78; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">78</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Hoàng Thanh Dương</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0983615065</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 79; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">79</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Tiến Dũng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0945931085</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 80; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">80</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Đạt Hiếu</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0936420357</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 81; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">81</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Thế Anh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0982955488</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 82; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">82</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Dương Văn Chi</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC1BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Khai thác công trình Thủy Lợi Bắc Đuống</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0917366318</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 83; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">83</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Trí</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC02BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">01685444935</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 84; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">84</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Lưu Văn Vượng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC02BN</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0943007018</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 85; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">85</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Xuân Quảng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC79M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Văn phòng tỉnh ủy, Tỉnh Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0904231415</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 86; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">86</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Ngô Thế Hanh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC81M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912222269</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 87; height: 28.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">87</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Dương Quý</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC84M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần may Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 28.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913259144</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 28.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 88; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">88</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Hồ Ngọc Thắng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TC97I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0982829762</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 89; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">89</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Đỗ Đình Tuấn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TCI10</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 3863702</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 90; height: 30.75pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">90</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Xuân Nam</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">TCI7</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.75pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912550353</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 30.75pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 91; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">91</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Đức Đua</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CT79</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 02413740198</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 92; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">92</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Thơ</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CT86M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 02413822976</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 93; height: 33.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">93</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Văn Luyện</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CĐ94I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Liên Doanh Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912934917</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 33.0pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="text-decoration: underline;"><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;">vanluyenqv@g.mail.com</span></span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 94; height: 32.25pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">94</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phạn Đình Nghị</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CĐ94I</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Kính Nổi Việt Nam</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 32.25pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CQ: 3863702</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 32.25pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 95; height: 33.0pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">95</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Bá Đăng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">CĐ951</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 33.0pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0989341769</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 33.0pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 96; height: 34.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">96</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Quang</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">LT06M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Chi nhánh Điện Yên Phong Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0915915921</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 34.5pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 97; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">97</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Thị Thúy Hằng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">LT06TĐH</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty TNHH CaNon Việt Nam, Quế Võ</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0946078922</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="text-decoration: underline;"><span style="font-size: 9.0pt; font-family: &amp;amp; quot; mso-fareast-font-family: &amp;amp;">vuhang.dc@gmail.com</span></span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 98; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">98</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Văn Nghĩa</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">V14M</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công Ty Gạch Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0912523742</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 99; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">99</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Ngọc Lạc</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường Cao đẳng nghề Cơ Điện Xây Dựng Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0985097595</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 100; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">100</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Văn Duẩn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trường THPT Thuận Thành 3, Bắc Ninh</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0915101013</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 101; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">101</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Dương Đức Quân</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty CJGLS</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0987587429</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 102; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">102</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Trọng Dương</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty Sứ Long Phương</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0968114777</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 103; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">103</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Phạm Quang Biên</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 104; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">104</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Trần Ngọc Toàn</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 105; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">105</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hoàng Liêng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 106; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">106</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Nguyễn Hoàng Liêng</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 107; mso-yfti-lastrow: yes; height: 31.5pt;">
<td style="width: 40.3pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="54">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">107</span></p>
</td>
<td style="width: 153.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="204">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Vũ Văn Chinh</span></p>
</td>
<td style="width: 82.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="109">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 62.15pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="83">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
<td style="width: 213.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="284">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">Công ty cổ phần Kính Viglacera Đáp Cầu</span></p>
</td>
<td style="width: 87.1pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 31.5pt;" width="116">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">0913259814</span></p>
</td>
<td style="width: 145.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 0cm 0cm 0cm; height: 31.5pt;" valign="top" width="193">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.0pt; font-family: &amp;amp;">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p class="MsoNormal"><span style="font-size: 9.0pt; line-height: 115%; font-family: &amp;amp;">&nbsp;</span></p>
</div>
</div>
@endsection