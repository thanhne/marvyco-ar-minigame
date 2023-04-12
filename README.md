# Marvyco Bài test làm AR Game

## Request
"Khách hàng A đang muốn làm 1 game AR. Với game này, người chơi có thể click vật phẩm để nhận điểm.  
Có 2 loại vật phẩm:  
1. Vật phẩm cộng điểm: **Nhẫn +5d, dây chuyền +10đ, kim cương trắng +20đ.**  
2.Vật phẩm trừ điểm: **Kim cương đen: -10đ.**  
  
Thời gian chơi là **30s**  
Điểm có thể giao động từ 0-500đ or trường hợp ngoại lệ (hiếm khi).  
  
Sau khi chơi xong, điểm số của **từng vòng** đó sẽ được lưu lại trên database thông qua API  
Có 4 API:  
+ API để đăng kí user: tên, sđt.  
+ API post điểm (userid, gameid, tổng điểm) trả về success or failed.  
+ API để get thông tin của từng user (userid) trả về thông tin người chơi (tên, sđt, điểm).  
+ API để get thông tin của tất cả user (tên, sđt, điểm).  
  
Yêu cầu :  
+ Điểm phải nhất quán **không có điểm âm**.  (*validate min:0 khii post điểm*)
+ Tránh việc sửa điểm, post điểm không hợp lệ, có **token** xác thực theo rule quy định nội bộ  (*tạo token cho user khi đăng ký*)
+ DDOS để post điểm liên tục.  (*throttle:100,60 Rate limit 100 request per 60 second*)
+ API yêu cầu thời gian dưới 200ms.  (*excution time limit < 200ms*)
+ Kiểm tra origin của request." (*bảo vệ ứng dụng của mình khỏi các cuộc tấn công từ các tên miền hoặc trang web khác*)

## How to run:
Clone project
 

    git clone https://github.com/thanhne/marvyco-ar-minigame.git

Cập nhật vendor

    composer install

Tạo database trong mysql tên **mini_game**
tạo file .env

    cat .env.example > .env

    php artisan key:generate

cập nhật lại file .env cho phù hợp.

Tạo database với lệnh migration

    php artisan migrate
    
Run Project

    php artisan serve --port 8009

Link test: http://localhost:8009 hoặc http://127.0.0.1:8009

## Api endpoint

### get all user
Get: http://localhost:8009/api/users
### get a user
Get: http://localhost:8009/api/user/{user_id}
### create user
Post: http://localhost:8009/api/user
##### request: 
name: Thành
phone_number: 0898011993
##### response: 
    {
    	"message": "success",
    	"data": {
    		"name": "Thành222",
    		"phone_number": "1321132113231zzzz",
    		"points": []
    	},
    	"token": "4|pKHdgHO6Z0MbeuFUutGpzgXbUHyCwYeSsTklKXps"
    }

### post point
http://localhost:8009/api/point
##### headers:
Authorization: Bearer ${token}
##### request:
user_id: 1
game_id: 1
total_point: 100
##### response:

    {
    	  "message": "success",
    	  "data": {
    		   "user_id": "1",
    		   "game_id": "1",
    		   "total_point": "10"
    	  }
    }

## Screenshot
![enter image description here](https://raw.githubusercontent.com/thanhne/marvyco-ar-minigame/master/screenshot.png)
## Thank You So much
