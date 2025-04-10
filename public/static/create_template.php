<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Template - Food Pantry</title>
    <style>
        * {
            box-sizing: border-box;
        }
        html {
            height: 100%;
        }
        body {
            background: #ddd;
            height: 100%;
        }

        thead td {
            font-weight: bold;
        }

        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            background: #ddd;
            box-shadow: 0 0 0.5em rgba(0,0,0,0.5);
            width: 100%;
            max-height: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 0.5em;
            background: #eee;
            border-bottom: 1px solid #ddd;
        }
        tbody {
            overflow-y: clip;
        }
        th {
            border-bottom: 1px solid #ccc;
            width: 16em;
        }

        #control-bar {
            width: 100%;
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            margin-bottom: 0.5em;
            padding: 0.2em;
        }

        #control-bar input {
            font-family: inherit;
            font-size: 1em;
            padding: 0.2em;
        }

        button[type=submit] {
            grid-column: span 2;
            font-size: 1em;
            padding: 0.5em;
            background: #4a77ca;
            border: none;
            color: white;
        }
        .flex-spacer {
            flex: auto;
        }

        td:has( input), td:has( textarea) {
            padding: 0.2em;
        }
        table input, table textarea {
            width: 100%;
            height: 100%;
            padding: 0.3em;
            font-size: 1em;
            font-family: inherit;
        }

        table textarea {
            height: 300px;
        }
        button {
            font-size: 1.2em;
            margin-top: 0.8em;
            padding: 0.5em;
            background: #4da439;
            border: none;
            color: white;
        }
    </style>
</head>
<body>
<div id="control-bar">
    <span style="font-weight: bold; font-size:1.5em;">Create New Template</span>
</div>
<table>
    <tbody>
    <tr><th>Template Name</th><td><input type="text" value="Example Template"></td></tr>
    <tr><th>Subject</th><td><input type="text" value="Example notification #{{number}}"></td></tr>
        <tr><td colspan="2">
                <textarea>
Hello, subscribers

There's a new food opportunity {{location}}. Only available until {{end_datetime}}!

- Panther Food Pantry Staff
                </textarea>
            </td></tr>
    </tbody>
</table>
<button>Create</button>
</body>
</html>
