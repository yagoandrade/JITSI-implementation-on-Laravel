<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jitsi Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src='https://meet.jit.si/external_api.js'></script>
    <style>
        html,
        body,
        #jaas-container {
            height: 100%;
        }

    </style>

    <script type="text/javascript">
        window.onload = () => {
                    const api = new JitsiMeetExternalAPI("8x8.vc", {
                        roomName: "{{ $sala }}",
                        parentNode: document.querySelector('#jaas-container'),
                        configOverwrite: {
                            defaultLanguage: 'pt'
                        }
                    });
                };
    </script>
    <body><div id="jaas-container"></div></body>


</head>
</html>
