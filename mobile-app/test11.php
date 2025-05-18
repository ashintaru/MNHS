<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Translate Integration</title>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: 'en', includedLanguages: 'en,tl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE },
                'google_translate_element'
            );
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
    <div id="google_translate_element"></div>

    <h1><?php echo "Welcome to My Website"; ?></h1>
    <p><?php echo "This is a dynamically generated paragraph."; ?></p>
</body>
</html>
