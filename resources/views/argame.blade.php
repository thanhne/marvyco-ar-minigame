<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AR mini game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            header input, header button {
                border: 1px dashed #17202a;
                border-radius: 6px;
                height: 40px;
                line-height: 40px;
            }

            header input:focus-visible {
                box-shadow: 5px 5px 5px #666; 
            }

            header button {
                background: #f95; 
                color: #fff; 
                text-shadow: 1px 2px 2px #666; 
                cursor: pointer; 
                font-weight: 600;
            }

            header button:hover {
                box-shadow: 1px 2px 3px #666; 
            }

            .color-group {
                width: 3%;
                float: left;
                display: block;
            }

            .color-block {
                float: left;
                display: block;
                position: relative;
                width: 100%;
                padding-bottom: 100%;
            }

            .color-block div {
                position: absolute;
                cursor: pointer;
                width: 100%;
                height: 100%;
                -webkit-transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1);
                -moz-transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1);
                -o-transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1);
                transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .color-block:hover div {
                -webkit-transform: scale(2);
                -moz-transform: scale(2);
                -ms-transform: scale(2);
                -o-transform: scale(2);
                transform: scale(2);
                border-radius: 3px;
                z-index: 4;
            }

            .color-group:nth-child(1) .color-block:nth-child(1) div {
                border-top-left-radius: 3px;
            }
        </style>
        <script>

        </script>
    </head>
    <body class="antialiased">
        <div class="">
            <div class="max-w-6xl mx-auto">
                <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid">
                        <header style="color: #fff;">
                            <h1 class="text-center">AR game mở quà</h1>
                            <div class="text-center" id="register">
                                <label>Tên: <input type="text" size="50" name="name" placeholder="Nhập tên của bạn" /></label>
                                <label>Số điện thoại: <input type="text" size="50" name="phone_number" placeholder="Nhập tên của bạn" /></label>
                                <button class="mx-1" type="button" aria-label="Đăng ký">Tạo tài khoản</button>
                            </div>
                        </header>
                        <div class="p-6">
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f9ebea" data-hex="#f9ebea" data-rgb="249, 235, 234" data-hsl="6, 54%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f2d7d5" data-hex="#f2d7d5" data-rgb="242, 215, 213" data-hsl="6, 54%, 89%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e6b0aa" data-hex="#e6b0aa" data-rgb="230, 176, 170" data-hsl="6, 54%, 78%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d98880" data-hex="#d98880" data-rgb="217, 136, 128" data-hsl="6, 54%, 68%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #cd6155" data-hex="#cd6155" data-rgb="205, 97, 85" data-hsl="6, 54%, 57%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #c0392b" data-hex="#c0392b" data-rgb="192, 57, 43" data-hsl="6, 63%, 46%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a93226" data-hex="#a93226" data-rgb="169, 50, 38" data-hsl="6, 63%, 41%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #922b21" data-hex="#922b21" data-rgb="146, 43, 33" data-hsl="6, 63%, 35%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7b241c" data-hex="#7b241c" data-rgb="123, 36, 28" data-hsl="6, 63%, 29%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #641e16" data-hex="#641e16" data-rgb="100, 30, 22" data-hsl="6, 63%, 24%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fdedec" data-hex="#fdedec" data-rgb="253, 237, 236" data-hsl="6, 78%, 96%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fadbd8" data-hex="#fadbd8" data-rgb="250, 219, 216" data-hsl="6, 78%, 91%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f5b7b1" data-hex="#f5b7b1" data-rgb="245, 183, 177" data-hsl="6, 78%, 83%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f1948a" data-hex="#f1948a" data-rgb="241, 148, 138" data-hsl="6, 78%, 74%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ec7063" data-hex="#ec7063" data-rgb="236, 112, 99" data-hsl="6, 78%, 66%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e74c3c" data-hex="#e74c3c" data-rgb="231, 76, 60" data-hsl="6, 78%, 57%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #cb4335" data-hex="#cb4335" data-rgb="203, 67, 53" data-hsl="6, 59%, 50%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #b03a2e" data-hex="#b03a2e" data-rgb="176, 58, 46" data-hsl="6, 59%, 43%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #943126" data-hex="#943126" data-rgb="148, 49, 38" data-hsl="6, 59%, 37%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #78281f" data-hex="#78281f" data-rgb="120, 40, 31" data-hsl="6, 59%, 30%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f5eef8" data-hex="#f5eef8" data-rgb="245, 238, 248" data-hsl="283, 39%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ebdef0" data-hex="#ebdef0" data-rgb="235, 222, 240" data-hsl="283, 39%, 91%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d7bde2" data-hex="#d7bde2" data-rgb="215, 189, 226" data-hsl="283, 39%, 81%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #c39bd3" data-hex="#c39bd3" data-rgb="195, 155, 211" data-hsl="283, 39%, 72%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #af7ac5" data-hex="#af7ac5" data-rgb="175, 122, 197" data-hsl="283, 39%, 63%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #9b59b6" data-hex="#9b59b6" data-rgb="155, 89, 182" data-hsl="283, 39%, 53%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #884ea0" data-hex="#884ea0" data-rgb="136, 78, 160" data-hsl="283, 34%, 47%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #76448a" data-hex="#76448a" data-rgb="118, 68, 138" data-hsl="283, 34%, 40%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #633974" data-hex="#633974" data-rgb="99, 57, 116" data-hsl="283, 34%, 34%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #512e5f" data-hex="#512e5f" data-rgb="81, 46, 95" data-hsl="283, 34%, 28%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f4ecf7" data-hex="#f4ecf7" data-rgb="244, 236, 247" data-hsl="282, 39%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e8daef" data-hex="#e8daef" data-rgb="232, 218, 239" data-hsl="282, 39%, 89%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d2b4de" data-hex="#d2b4de" data-rgb="210, 180, 222" data-hsl="282, 39%, 79%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #bb8fce" data-hex="#bb8fce" data-rgb="187, 143, 206" data-hsl="282, 39%, 68%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a569bd" data-hex="#a569bd" data-rgb="165, 105, 189" data-hsl="282, 39%, 58%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #8e44ad" data-hex="#8e44ad" data-rgb="142, 68, 173" data-hsl="282, 44%, 47%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7d3c98" data-hex="#7d3c98" data-rgb="125, 60, 152" data-hsl="282, 44%, 42%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #6c3483" data-hex="#6c3483" data-rgb="108, 52, 131" data-hsl="282, 44%, 36%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #5b2c6f" data-hex="#5b2c6f" data-rgb="91, 44, 111" data-hsl="282, 44%, 30%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #4a235a" data-hex="#4a235a" data-rgb="74, 35, 90" data-hsl="282, 44%, 25%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #eaf2f8" data-hex="#eaf2f8" data-rgb="234, 242, 248" data-hsl="204, 51%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d4e6f1" data-hex="#d4e6f1" data-rgb="212, 230, 241" data-hsl="204, 51%, 89%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a9cce3" data-hex="#a9cce3" data-rgb="169, 204, 227" data-hsl="204, 51%, 78%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7fb3d5" data-hex="#7fb3d5" data-rgb="127, 179, 213" data-hsl="204, 51%, 67%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #5499c7" data-hex="#5499c7" data-rgb="84, 153, 199" data-hsl="204, 51%, 55%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2980b9" data-hex="#2980b9" data-rgb="41, 128, 185" data-hsl="204, 64%, 44%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2471a3" data-hex="#2471a3" data-rgb="36, 113, 163" data-hsl="204, 64%, 39%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1f618d" data-hex="#1f618d" data-rgb="31, 97, 141" data-hsl="204, 64%, 34%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1a5276" data-hex="#1a5276" data-rgb="26, 82, 118" data-hsl="204, 64%, 28%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #154360" data-hex="#154360" data-rgb="21, 67, 96" data-hsl="204, 64%, 23%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ebf5fb" data-hex="#ebf5fb" data-rgb="235, 245, 251" data-hsl="204, 70%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d6eaf8" data-hex="#d6eaf8" data-rgb="214, 234, 248" data-hsl="204, 70%, 91%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #aed6f1" data-hex="#aed6f1" data-rgb="174, 214, 241" data-hsl="204, 70%, 81%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #85c1e9" data-hex="#85c1e9" data-rgb="133, 193, 233" data-hsl="204, 70%, 72%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #5dade2" data-hex="#5dade2" data-rgb="93, 173, 226" data-hsl="204, 70%, 63%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #3498db" data-hex="#3498db" data-rgb="52, 152, 219" data-hsl="204, 70%, 53%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2e86c1" data-hex="#2e86c1" data-rgb="46, 134, 193" data-hsl="204, 62%, 47%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2874a6" data-hex="#2874a6" data-rgb="40, 116, 166" data-hsl="204, 62%, 40%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #21618c" data-hex="#21618c" data-rgb="33, 97, 140" data-hsl="204, 62%, 34%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1b4f72" data-hex="#1b4f72" data-rgb="27, 79, 114" data-hsl="204, 62%, 28%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e8f8f5" data-hex="#e8f8f5" data-rgb="232, 248, 245" data-hsl="168, 55%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d1f2eb" data-hex="#d1f2eb" data-rgb="209, 242, 235" data-hsl="168, 55%, 88%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a3e4d7" data-hex="#a3e4d7" data-rgb="163, 228, 215" data-hsl="168, 55%, 77%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #76d7c4" data-hex="#76d7c4" data-rgb="118, 215, 196" data-hsl="168, 55%, 65%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #48c9b0" data-hex="#48c9b0" data-rgb="72, 201, 176" data-hsl="168, 55%, 54%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1abc9c" data-hex="#1abc9c" data-rgb="26, 188, 156" data-hsl="168, 76%, 42%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #17a589" data-hex="#17a589" data-rgb="23, 165, 137" data-hsl="168, 76%, 37%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #148f77" data-hex="#148f77" data-rgb="20, 143, 119" data-hsl="168, 76%, 32%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #117864" data-hex="#117864" data-rgb="17, 120, 100" data-hsl="168, 76%, 27%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #0e6251" data-hex="#0e6251" data-rgb="14, 98, 81" data-hsl="168, 76%, 22%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e8f6f3" data-hex="#e8f6f3" data-rgb="232, 246, 243" data-hsl="168, 42%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d0ece7" data-hex="#d0ece7" data-rgb="208, 236, 231" data-hsl="168, 42%, 87%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a2d9ce" data-hex="#a2d9ce" data-rgb="162, 217, 206" data-hsl="168, 42%, 74%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #73c6b6" data-hex="#73c6b6" data-rgb="115, 198, 182" data-hsl="168, 42%, 61%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #45b39d" data-hex="#45b39d" data-rgb="69, 179, 157" data-hsl="168, 45%, 49%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #16a085" data-hex="#16a085" data-rgb="22, 160, 133" data-hsl="168, 76%, 36%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #138d75" data-hex="#138d75" data-rgb="19, 141, 117" data-hsl="168, 76%, 31%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #117a65" data-hex="#117a65" data-rgb="17, 122, 101" data-hsl="168, 76%, 27%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #0e6655" data-hex="#0e6655" data-rgb="14, 102, 85" data-hsl="168, 76%, 23%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #0b5345" data-hex="#0b5345" data-rgb="11, 83, 69" data-hsl="168, 76%, 19%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e9f7ef" data-hex="#e9f7ef" data-rgb="233, 247, 239" data-hsl="145, 45%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d4efdf" data-hex="#d4efdf" data-rgb="212, 239, 223" data-hsl="145, 45%, 88%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a9dfbf" data-hex="#a9dfbf" data-rgb="169, 223, 191" data-hsl="145, 45%, 77%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7dcea0" data-hex="#7dcea0" data-rgb="125, 206, 160" data-hsl="145, 45%, 65%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #52be80" data-hex="#52be80" data-rgb="82, 190, 128" data-hsl="145, 45%, 53%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #27ae60" data-hex="#27ae60" data-rgb="39, 174, 96" data-hsl="145, 63%, 42%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #229954" data-hex="#229954" data-rgb="34, 153, 84" data-hsl="145, 63%, 37%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1e8449" data-hex="#1e8449" data-rgb="30, 132, 73" data-hsl="145, 63%, 32%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #196f3d" data-hex="#196f3d" data-rgb="25, 111, 61" data-hsl="145, 63%, 27%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #145a32" data-hex="#145a32" data-rgb="20, 90, 50" data-hsl="145, 63%, 22%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #eafaf1" data-hex="#eafaf1" data-rgb="234, 250, 241" data-hsl="145, 61%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d5f5e3" data-hex="#d5f5e3" data-rgb="213, 245, 227" data-hsl="145, 61%, 90%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #abebc6" data-hex="#abebc6" data-rgb="171, 235, 198" data-hsl="145, 61%, 80%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #82e0aa" data-hex="#82e0aa" data-rgb="130, 224, 170" data-hsl="145, 61%, 69%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #58d68d" data-hex="#58d68d" data-rgb="88, 214, 141" data-hsl="145, 61%, 59%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2ecc71" data-hex="#2ecc71" data-rgb="46, 204, 113" data-hsl="145, 63%, 49%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #28b463" data-hex="#28b463" data-rgb="40, 180, 99" data-hsl="145, 63%, 43%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #239b56" data-hex="#239b56" data-rgb="35, 155, 86" data-hsl="145, 63%, 37%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1d8348" data-hex="#1d8348" data-rgb="29, 131, 72" data-hsl="145, 63%, 31%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #186a3b" data-hex="#186a3b" data-rgb="24, 106, 59" data-hsl="145, 63%, 25%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fef9e7" data-hex="#fef9e7" data-rgb="254, 249, 231" data-hsl="48, 89%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fcf3cf" data-hex="#fcf3cf" data-rgb="252, 243, 207" data-hsl="48, 89%, 90%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f9e79f" data-hex="#f9e79f" data-rgb="249, 231, 159" data-hsl="48, 89%, 80%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f7dc6f" data-hex="#f7dc6f" data-rgb="247, 220, 111" data-hsl="48, 89%, 70%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f4d03f" data-hex="#f4d03f" data-rgb="244, 208, 63" data-hsl="48, 89%, 60%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f1c40f" data-hex="#f1c40f" data-rgb="241, 196, 15" data-hsl="48, 89%, 50%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d4ac0d" data-hex="#d4ac0d" data-rgb="212, 172, 13" data-hsl="48, 88%, 44%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #b7950b" data-hex="#b7950b" data-rgb="183, 149, 11" data-hsl="48, 88%, 38%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #9a7d0a" data-hex="#9a7d0a" data-rgb="154, 125, 10" data-hsl="48, 88%, 32%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7d6608" data-hex="#7d6608" data-rgb="125, 102, 8" data-hsl="48, 88%, 26%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fef5e7" data-hex="#fef5e7" data-rgb="254, 245, 231" data-hsl="37, 90%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fdebd0" data-hex="#fdebd0" data-rgb="253, 235, 208" data-hsl="37, 90%, 90%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fad7a0" data-hex="#fad7a0" data-rgb="250, 215, 160" data-hsl="37, 90%, 80%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f8c471" data-hex="#f8c471" data-rgb="248, 196, 113" data-hsl="37, 90%, 71%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f5b041" data-hex="#f5b041" data-rgb="245, 176, 65" data-hsl="37, 90%, 61%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f39c12" data-hex="#f39c12" data-rgb="243, 156, 18" data-hsl="37, 90%, 51%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d68910" data-hex="#d68910" data-rgb="214, 137, 16" data-hsl="37, 86%, 45%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #b9770e" data-hex="#b9770e" data-rgb="185, 119, 14" data-hsl="37, 86%, 39%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #9c640c" data-hex="#9c640c" data-rgb="156, 100, 12" data-hsl="37, 86%, 33%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7e5109" data-hex="#7e5109" data-rgb="126, 81, 9" data-hsl="37, 86%, 27%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fdf2e9" data-hex="#fdf2e9" data-rgb="253, 242, 233" data-hsl="28, 80%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fae5d3" data-hex="#fae5d3" data-rgb="250, 229, 211" data-hsl="28, 80%, 90%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f5cba7" data-hex="#f5cba7" data-rgb="245, 203, 167" data-hsl="28, 80%, 81%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f0b27a" data-hex="#f0b27a" data-rgb="240, 178, 122" data-hsl="28, 80%, 71%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #eb984e" data-hex="#eb984e" data-rgb="235, 152, 78" data-hsl="28, 80%, 61%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e67e22" data-hex="#e67e22" data-rgb="230, 126, 34" data-hsl="28, 80%, 52%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ca6f1e" data-hex="#ca6f1e" data-rgb="202, 111, 30" data-hsl="28, 74%, 46%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #af601a" data-hex="#af601a" data-rgb="175, 96, 26" data-hsl="28, 74%, 39%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #935116" data-hex="#935116" data-rgb="147, 81, 22" data-hsl="28, 74%, 33%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #784212" data-hex="#784212" data-rgb="120, 66, 18" data-hsl="28, 74%, 27%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fbeee6" data-hex="#fbeee6" data-rgb="251, 238, 230" data-hsl="24, 71%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f6ddcc" data-hex="#f6ddcc" data-rgb="246, 221, 204" data-hsl="24, 71%, 88%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #edbb99" data-hex="#edbb99" data-rgb="237, 187, 153" data-hsl="24, 71%, 77%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e59866" data-hex="#e59866" data-rgb="229, 152, 102" data-hsl="24, 71%, 65%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #dc7633" data-hex="#dc7633" data-rgb="220, 118, 51" data-hsl="24, 71%, 53%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d35400" data-hex="#d35400" data-rgb="211, 84, 0" data-hsl="24, 100%, 41%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ba4a00" data-hex="#ba4a00" data-rgb="186, 74, 0" data-hsl="24, 100%, 36%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a04000" data-hex="#a04000" data-rgb="160, 64, 0" data-hsl="24, 100%, 31%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #873600" data-hex="#873600" data-rgb="135, 54, 0" data-hsl="24, 100%, 26%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #6e2c00" data-hex="#6e2c00" data-rgb="110, 44, 0" data-hsl="24, 100%, 22%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fdfefe" data-hex="#fdfefe" data-rgb="253, 254, 254" data-hsl="192, 15%, 99%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #fbfcfc" data-hex="#fbfcfc" data-rgb="251, 252, 252" data-hsl="192, 15%, 99%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f7f9f9" data-hex="#f7f9f9" data-rgb="247, 249, 249" data-hsl="192, 15%, 97%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f4f6f7" data-hex="#f4f6f7" data-rgb="244, 246, 247" data-hsl="192, 15%, 96%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f0f3f4" data-hex="#f0f3f4" data-rgb="240, 243, 244" data-hsl="192, 15%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ecf0f1" data-hex="#ecf0f1" data-rgb="236, 240, 241" data-hsl="192, 15%, 94%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d0d3d4" data-hex="#d0d3d4" data-rgb="208, 211, 212" data-hsl="192, 5%, 82%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #b3b6b7" data-hex="#b3b6b7" data-rgb="179, 182, 183" data-hsl="192, 3%, 71%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #979a9a" data-hex="#979a9a" data-rgb="151, 154, 154" data-hsl="192, 2%, 60%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7b7d7d" data-hex="#7b7d7d" data-rgb="123, 125, 125" data-hsl="192, 1%, 49%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f8f9f9" data-hex="#f8f9f9" data-rgb="248, 249, 249" data-hsl="204, 8%, 98%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f2f3f4" data-hex="#f2f3f4" data-rgb="242, 243, 244" data-hsl="204, 8%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e5e7e9" data-hex="#e5e7e9" data-rgb="229, 231, 233" data-hsl="204, 8%, 90%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d7dbdd" data-hex="#d7dbdd" data-rgb="215, 219, 221" data-hsl="204, 8%, 86%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #cacfd2" data-hex="#cacfd2" data-rgb="202, 207, 210" data-hsl="204, 8%, 81%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #bdc3c7" data-hex="#bdc3c7" data-rgb="189, 195, 199" data-hsl="204, 8%, 76%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #a6acaf" data-hex="#a6acaf" data-rgb="166, 172, 175" data-hsl="204, 5%, 67%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #909497" data-hex="#909497" data-rgb="144, 148, 151" data-hsl="204, 4%, 58%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #797d7f" data-hex="#797d7f" data-rgb="121, 125, 127" data-hsl="204, 3%, 49%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #626567" data-hex="#626567" data-rgb="98, 101, 103" data-hsl="204, 3%, 40%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f4f6f6" data-hex="#f4f6f6" data-rgb="244, 246, 246" data-hsl="184, 9%, 96%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #eaeded" data-hex="#eaeded" data-rgb="234, 237, 237" data-hsl="184, 9%, 92%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d5dbdb" data-hex="#d5dbdb" data-rgb="213, 219, 219" data-hsl="184, 9%, 85%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #bfc9ca" data-hex="#bfc9ca" data-rgb="191, 201, 202" data-hsl="184, 9%, 77%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #aab7b8" data-hex="#aab7b8" data-rgb="170, 183, 184" data-hsl="184, 9%, 69%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #95a5a6" data-hex="#95a5a6" data-rgb="149, 165, 166" data-hsl="184, 9%, 62%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #839192" data-hex="#839192" data-rgb="131, 145, 146" data-hsl="184, 6%, 54%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #717d7e" data-hex="#717d7e" data-rgb="113, 125, 126" data-hsl="184, 5%, 47%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #5f6a6a" data-hex="#5f6a6a" data-rgb="95, 106, 106" data-hsl="184, 5%, 40%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #4d5656" data-hex="#4d5656" data-rgb="77, 86, 86" data-hsl="184, 5%, 32%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #f2f4f4" data-hex="#f2f4f4" data-rgb="242, 244, 244" data-hsl="184, 6%, 95%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #e5e8e8" data-hex="#e5e8e8" data-rgb="229, 232, 232" data-hsl="184, 6%, 91%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ccd1d1" data-hex="#ccd1d1" data-rgb="204, 209, 209" data-hsl="184, 6%, 81%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #b2babb" data-hex="#b2babb" data-rgb="178, 186, 187" data-hsl="184, 6%, 72%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #99a3a4" data-hex="#99a3a4" data-rgb="153, 163, 164" data-hsl="184, 6%, 62%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #7f8c8d" data-hex="#7f8c8d" data-rgb="127, 140, 141" data-hsl="184, 6%, 53%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #707b7c" data-hex="#707b7c" data-rgb="112, 123, 124" data-hsl="184, 5%, 46%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #616a6b" data-hex="#616a6b" data-rgb="97, 106, 107" data-hsl="184, 5%, 40%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #515a5a" data-hex="#515a5a" data-rgb="81, 90, 90" data-hsl="184, 5%, 34%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #424949" data-hex="#424949" data-rgb="66, 73, 73" data-hsl="184, 5%, 27%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #ebedef" data-hex="#ebedef" data-rgb="235, 237, 239" data-hsl="210, 12%, 93%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d6dbdf" data-hex="#d6dbdf" data-rgb="214, 219, 223" data-hsl="210, 12%, 86%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #aeb6bf" data-hex="#aeb6bf" data-rgb="174, 182, 191" data-hsl="210, 12%, 71%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #85929e" data-hex="#85929e" data-rgb="133, 146, 158" data-hsl="210, 12%, 57%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #5d6d7e" data-hex="#5d6d7e" data-rgb="93, 109, 126" data-hsl="210, 15%, 43%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #34495e" data-hex="#34495e" data-rgb="52, 73, 94" data-hsl="210, 29%, 29%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2e4053" data-hex="#2e4053" data-rgb="46, 64, 83" data-hsl="210, 29%, 25%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #283747" data-hex="#283747" data-rgb="40, 55, 71" data-hsl="210, 29%, 22%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #212f3c" data-hex="#212f3c" data-rgb="33, 47, 60" data-hsl="210, 29%, 18%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1b2631" data-hex="#1b2631" data-rgb="27, 38, 49" data-hsl="210, 29%, 15%"></div>
                                </div>
                            </div>
                            <div class="color-group">
                                <div class="color-block">
                                <div class="js-color" style="background-color: #eaecee" data-hex="#eaecee" data-rgb="234, 236, 238" data-hsl="210, 9%, 92%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #d5d8dc" data-hex="#d5d8dc" data-rgb="213, 216, 220" data-hsl="210, 9%, 85%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #abb2b9" data-hex="#abb2b9" data-rgb="171, 178, 185" data-hsl="210, 9%, 70%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #808b96" data-hex="#808b96" data-rgb="128, 139, 150" data-hsl="210, 9%, 55%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #566573" data-hex="#566573" data-rgb="86, 101, 115" data-hsl="210, 14%, 39%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #2c3e50" data-hex="#2c3e50" data-rgb="44, 62, 80" data-hsl="210, 29%, 24%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #273746" data-hex="#273746" data-rgb="39, 55, 70" data-hsl="210, 29%, 21%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #212f3d" data-hex="#212f3d" data-rgb="33, 47, 61" data-hsl="210, 29%, 18%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #1c2833" data-hex="#1c2833" data-rgb="28, 40, 51" data-hsl="210, 29%, 16%"></div>
                                </div>
                                <div class="color-block">
                                <div class="js-color" style="background-color: #17202a" data-hex="#17202a" data-rgb="23, 32, 42" data-hsl="210, 29%, 13%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
