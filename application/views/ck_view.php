<!--<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Eeeeeeeexxoooooooooo :)</title>
        <script type="text/javascript" src="/js/ckeditor.js"></script>
</head>

<body>
    <textarea id="editor1" name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
    <script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
    </script>
    <script type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( 'editor1' );
	};
        CKEDITOR.on( 'instanceReady', function( tohtml )
            {
        tohtml.editor.dataProcessor.writer.selfClosingEnd = '>';
            });
    </script>
</body>
</html>
-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Ckeditor</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <script src="/js/ckeditor.js" type="text/javascript"></script>
</head>
<body>
        <form action="/ckeditor/index" method="post">
                <textarea name="content" id="content" ><p>Example data</p></textarea>
               <?php #echo display_ckeditor($ckeditor); ?>
	</form>
</body>
</html>