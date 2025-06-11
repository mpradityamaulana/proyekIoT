<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teskontrol</title>
    <style>
        body{margin:0;background:#111;color:#eee;font-family:sans-serif}
        #sceneCanvas{display:block;width:100%;height:80vh}
        .controls{display:flex;gap:8px;justify-content:center;margin-top:12px;flex-wrap:wrap}
        .btn{padding:.5rem 1rem;border:none;border-radius:.5rem;background:#444;color:#eee;cursor:pointer}
        .btn:hover{background:#666}
    </style>
    @vite(['resources/js/app.js'])
</head>
<body>
    <canvas id="sceneCanvas"></canvas>
    <div class="controls">
        <button class="btn" data-action="rotate">⟳ Rotate Y</button>
        <button class="btn" data-action="zoom">⤡ Zoom In/Out</button>
    </div>
</body>
</html>