<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AR mini game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:82rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            ul {
                list-style: none;
                padding: 0px;
                margin: 0px;
                overflow-y:scroll;
            }
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

            header #count_down {
                font-size: 28px;
                color: #f95;
            }

            .color-group {
                width: 5%;
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

            #show_item {
                float: left; 
                width: 70%;
                position: relative;
            }

            #show_item .mark {
                background-color: #000;
                opacity: .8;
                height: 100%;
                position: absolute;
                z-index: 888;
                width: 95%;
            }

            #show_item .play-button {
                background: #ecd40c;
                box-shadow: 1px 2px 3px #fff;
                position: absolute;
                z-index: 999;
                top: 40%;
                left: 42%;
                border-radius: 100px;
                width: 100px;
                height: 100px;
                text-align: center;
                cursor: pointer;
            }

            #show_item .play-button:hover {
                opacity: .8;
                box-shadow: 1px 2px 3px #000;
                width: 101px;
                height: 101px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="">
            <div class="max-w-6xl mx-auto">
                <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div style="color: #fff;">
                        <header style="float: left; width: 100%">
                            <h1 class="text-center">AR game mở vật phẩm</h1>
                            <h2 class="text-center">Bạn còn <span id="count_down">30</span>s để mở vật phẩm</h2>
                            <div class="text-center" id="register" style="display: none">
                                <label>Tên: <input type="text" size="50" name="name" placeholder="Nhập tên của bạn" /></label>
                                <label>Số điện thoại: <input type="text" size="50" name="phone_number" placeholder="Nhập tên của bạn" /></label>
                                <button class="mx-1" type="button" name="register" aria-label="Đăng ký">Tạo tài khoản</button>
                            </div>
                            <div class="text-center" id="user_info" style="display: none">
                                <label>Tên: <span id="name" style="font-size: 18px; color: #f95"></span></label>
                                <label>Số điện thoại: <span id="phone_number" style="font-size: 18px; color: #f95"></span></label>
                                <button class="mx-1" type="button" onclick="logout()" aria-label="Đăng ký">Thoát</button>
                            </div>
                        </header>
                        <div id="show_item" class="p-6">
                            <button type="button" class="play-button" onclick="play_button()" aria-label="play button">PLAY</button>
                            <div class="mark"></div>
                        </div>
                        <div id="total_point" style="float: left; width: 30%;">
                            <h2>Tổng điểm: <span id="point">0</span></h2>
                        </div>
                        <div id="total_users_point" style="float: left; width: 30%;">
                            <h2>Danh sách user:</h2>
                            <ul id="users"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            var color_list = [
                "#f9ebea", "#f2d7d5", "#e6b0aa", "#d98880", "#cd6155", "#c0392b", "#a93226",
                "#922b21", "#7b241c", "#641e16", "#fdedec", "#fadbd8", "#f5b7b1", "#f1948a",
                "#ec7063", "#e74c3c", "#cb4335", "#b03a2e", "#943126", "#78281f", "#f5eef8",
                "#ebdef0", "#d7bde2", "#c39bd3", "#af7ac5", "#9b59b6", "#884ea0", "#76448a",
                "#633974", "#512e5f", "#f4ecf7", "#e8daef", "#d2b4de", "#bb8fce", "#a569bd",
                "#8e44ad", "#7d3c98", "#6c3483", "#5b2c6f", "#4a235a", "#eaf2f8", "#d4e6f1",
                "#a9cce3", "#7fb3d5", "#5499c7", "#2980b9", "#2471a3", "#1f618d", "#1a5276",
                "#154360", "#ebf5fb", "#d6eaf8", "#aed6f1", "#85c1e9", "#5dade2", "#3498db",
                "#2e86c1", "#2874a6", "#21618c", "#1b4f72", "#e8f8f5", "#d1f2eb", "#a3e4d7",
                "#76d7c4", "#48c9b0", "#1abc9c", "#17a589", "#148f77", "#117864", "#0e6251",
                "#e8f6f3", "#d0ece7", "#a2d9ce", "#73c6b6", "#45b39d", "#16a085", "#138d75",
                "#117a65", "#0e6655", "#0b5345", "#e9f7ef", "#d4efdf", "#a9dfbf", "#7dcea0",
                "#52be80", "#27ae60", "#229954", "#1e8449", "#196f3d", "#145a32", "#eafaf1",
                "#d5f5e3", "#abebc6", "#82e0aa", "#58d68d", "#2ecc71", "#28b463", "#239b56",
                "#1d8348", "#186a3b", "#fef9e7", "#fcf3cf", "#f9e79f", "#f7dc6f", "#f4d03f",
                "#f1c40f", "#d4ac0d", "#b7950b", "#9a7d0a", "#7d6608", "#fef5e7", "#fdebd0",
                "#fad7a0", "#f8c471", "#f5b041", "#f39c12", "#d68910", "#b9770e", "#9c640c",
                "#7e5109", "#fdf2e9", "#fae5d3", "#f5cba7", "#f0b27a", "#eb984e", "#e67e22",
                "#ca6f1e", "#af601a", "#935116", "#784212", "#fbeee6", "#f6ddcc", "#edbb99",
                "#e59866", "#dc7633", "#d35400", "#ba4a00", "#a04000", "#873600", "#6e2c00",
                "#fdfefe", "#fbfcfc", "#f7f9f9", "#f4f6f7", "#f0f3f4", "#ecf0f1", "#d0d3d4",
                "#b3b6b7", "#979a9a", "#7b7d7d", "#f8f9f9", "#f2f3f4", "#e5e7e9", "#d7dbdd",
                "#cacfd2", "#bdc3c7", "#a6acaf", "#909497", "#797d7f", "#626567", "#f4f6f6",
                "#eaeded", "#d5dbdb", "#bfc9ca", "#aab7b8", "#95a5a6", "#839192", "#717d7e",
                "#5f6a6a", "#4d5656", "#f2f4f4", "#e5e8e8", "#ccd1d1", "#b2babb", "#99a3a4",
                "#7f8c8d", "#707b7c", "#616a6b", "#515a5a", "#424949", "#ebedef", "#d6dbdf",
                "#aeb6bf", "#85929e", "#5d6d7e", "#34495e", "#2e4053", "#283747", "#212f3c",
                "#1b2631", "#eaecee", "#d5d8dc", "#abb2b9", "#808b96", "#566573", "#2c3e50",
                "#273746", "#212f3d", "#1c2833", "#17202a"
            ];
            
            function shuffle(array) {
                array.sort(() => Math.random() - 0.5);
            }

            function pick_item()
            {
                var items = [
                    {
                        "text": "Nhẫn",
                        "value": 5
                    },
                    {
                        "text": "Dây chuyền",
                        "value": 10
                    },
                    {
                        "text": "Kim cương trắng",
                        "value": 20
                    },
                    {
                        "text": "Kim cương đen",
                        "value": -10
                    },
                ];
                shuffle(items);

                let get_item = items[0];

                let current_point = parseInt($("#total_point #point").text());
                if(typeof current_point != "number") {
                    current_point = 0;
                }

                let total_point = current_point + parseInt(get_item.value);
                $("#total_point #point").text(total_point);
                console.log(total_point);
            }

            function user_info()
            {
                let token = getcookie("api_token");
                let user_info = getcookie("user_info");

                let check_token = typeof token != "undefined" && token != null && token != "";
                let check_user_info = typeof user_info != "undefined" && user_info != null && user_info != "";

                if(!check_token || !check_user_info) {
                    $("#register").css("display", "block");
                }

                if(check_token && check_user_info) {
                    $("#user_info").css("display", "block");
                    user_info = JSON.parse(user_info);
                    $("#user_info #name").text(user_info.name);
                    $("#user_info #phone_number").text(user_info.phone_number);
                }
            }
            
            function logout()
            {
                setcookie("api_token", null, 1);
                setcookie("user_info", null, 1);
                window.location.reload();
            }

            function play_button()
            {
                $("#total_point #point").text(0);
                //typeof user_info != "undefined" && user_info != null && user_info != "";
                let user_info = getcookie("user_info");
                if(typeof user_info != "undefined" && user_info != null && user_info != "") {
                    user_info = JSON.parse(user_info);
                    var user_id = user_info.id;
                    $('.play-button').hide();
                    $('.mark').css("display", "none");
                    var count_down = 30, x = setInterval(function () {
                        console.log(--count_down);
                        $("#count_down").text(count_down);
                        if (count_down === 0) {
                            console.info("Post Point");
                            var total_point = parseInt($("#total_point #point").text());
                            if(typeof total_point != "number") {
                                total_point = 0;
                            }
                            post_point(user_id, 1, total_point);
                            $('.play-button').show();
                            $('.mark').css("display", "block");
                            $("#count_down").text(30);
                            get_users();
                            clearInterval(x);
                        }
                    }, 1000);
                } else {
                    alert("Vui lòng nhập tên và số điện thoại");
                }
            }

            function show_item(items)
            {
                var rs = "";
                var item_html = "";
                for (let i = 0; i < items.length; i++) {
                    item_html += `<div class="color-block"><div class="js-color" style="background-color: ${items[i]}"></div></div>`;
                    if((i + 1) % 10 == 0) {
                        rs += `<div class="color-group">${item_html}</div>`;
                        item_html = "";
                    }
                    
                }

                $("#show_item").append(rs);

                //pick item
                $(".js-color").on('click', function() {
                    pick_item();
                });

                //register
                $('button[name=register]').on('click', function() {
                    let name = $("#register input[name=name]").val();
                    let phone_number = $("#register input[name=phone_number]").val();
                    post_register(name, phone_number);
                });

                user_info();
                get_users();
            }
            show_item(color_list);

            /**
             * work with data
             */
            function get_users()
            {
                $.ajax({
                    url: "api/users",
                    type: "GET",
                    success: function(data, status) {
                        var users = data.data;
                        var rs = "";
                        for (let index = 0; index < users.length; index++) {
                            const user = users[index];
                            
                            var name = user.name;
                            var phone_number = user.phone_number;
                            
                            /** 
                             * Find max point of user
                             */
                            var points = user.points;
                            var total_point = 0;
                            for (let j = 0; j < points.length; j++) {
                                const point = points[j];
                                let tt_point = point.total_point;
                                if(tt_point > total_point) {
                                    total_point = tt_point;
                                }
                            }
                            
                            rs += `<li>${name} - <strong>sdt</strong>: ${phone_number} - ${total_point}điểm</li>`;
                            
                        }

                        $("#users").html(rs);
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
            }

            function post_point(user_id, game_id, total_point)
            {
                var token = getcookie("api_token");
                $.ajax({
                    url: "api/point",
                    type: "POST",
                    headers: {
                        "Authorization": "Bearer " + token
                    },
                    data: {
                        user_id: user_id,
                        total_point: total_point,
                        game_id: game_id
                    },
                    success: function(data, status) {
                        console.log(data);
                        //alert("Data: " + data + "\nStatus: " + status);
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
            }

            function post_register(name, phone_number)
            {
                $.ajax({
                    url: "api/user",
                    type: "POST",
                    data: {
                        name: name,
                        phone_number: phone_number
                    },
                    success: function(data, status) {
                        console.log(status);
                        setcookie("api_token", data.token, 1);
                        setcookie("user_info", JSON.stringify(data.data), 1);
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
            }

            function setcookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }

            function getcookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }
        </script>
    </body>
</html>
