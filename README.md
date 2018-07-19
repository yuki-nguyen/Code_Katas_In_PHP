Trong đây chính là các file code theo mô hình Katas-in-PHP.
Trong phần spec chính là các Unit Test với tên các file gần giống với tên file code cần test(chỉ thêm chữ Spec ngay sau thôi).
Trong phần src chính là các file code cần test:
  - 1: PrimeFactors
        Mục đích: 1 số bất kì luôn luôn có thể biểu diễn dưới dạng số nguyên tố. Chương trình này viết ra nhằm mục đích
        phân tích số $number đưa vào và nó sẽ trả về cho chúng ta là mảng các số nguyên tố (sao cho tích các thành phần này == $number)
            VD: 6 = 2*3 => kết quả trả về [2,3] // 2 và 3 gọi là các factors.
                5 = 5*1 => là số nguyên tố (primes) => kết quả [5]
                
  - 2: Roman Numerals
        Mục đích: Chuyển đổi các số tự nhiên sang số La Mã. Gọi ngoại lệ khi số đó <=0
        
  - 3: Bowling games:
  
      CÁCH TÍNH ĐIỂM TRONG BOWLING

      (vị trí của 10 pin)

      Có 10 frame trong 1 game và mỗi frame được ném tối đa 2 lần, riêng frame cuối cùng được ném tối đa 3 lần.

      Thông thường ném đổ 1 pin được tính 1 điểm. Ví dụ nếu người chơi ném đổ 3 pin trong lần ném đầu tiên và 6 pin
      trong lần ném thứ 2, số điểm ghi được sẽ là 9 điểm cho frame đó . Nếu ném đổ 9 pin trong lần ném đầu tiên và 
      ném trượt ở lần 2, người chơi cũng sẽ ghi được 9 điểm. Nếu sau 2 lần ném không đổ hết cả 10 pin, người ta gọi
      là open frame

Điểm thưởng:

       <b>Strike:</b> Khi ném đổ tất cả 10 pin trong lần ném đầu tiên (gọi là Strike), người chơi sẽ được thưởng 10
       điểm, cộng thêm với điểm thưởng bằng số điểm sẽ đạt được ở frame tiếp theo với 2 lần ném. Có nghĩa là, số 
       điểm của 2 lần ném ở frame tiếp theo sẽ
       được tính 2 lần. Ví dụ: Frame 1, lần ném thứ nhất: 10 pins (Strike)
            Frame 2, lần ném thứ nhất: 3 pins
            Frame 2, lần ném thứ hai: 6 pins
            Tổng số điểm đạt được sẽ là: 10 + (3+6) + 3 + 6 = 28
            Nếu được 2 quả Strike liên tiếp sẽ gọi là “Double” Ba Strike liên tiếp gọi là “Turkey”

            Nếu ném được nhiều Strike hơn, người ta sẽ dùng hậu tố “bagger” + số quả Strike ném được, ví dụ, như "
            four-bagger” (4 Strike liên tiếp – 4 in a row) hay “five-bagger” (5 strike liên tiếp – 5 in a row).

      Với quả 6 Strike liên tiếp, người ta có thể gọi là “Six pack” hoặc “Wild Turkeys” . 9 Strike liên tiếp được 
      gọi rất kêu với cái tên “Golden Turkeys” . (Opps, bao giờ thì mình đạt đến cảnh giới này nhể)

      Nếu người chơi được nhiều Strike liên tiếp, điểm sẽ được tính như sau:
            Frame 1, lần ném thứ nhất: 10 pins (Strike)
            Frame 2, lần ném thứ nhất: 10 pins (Strike)
            Frame 3, lần ném thứ nhất: 4 pins
            Frame 3, lần ném thứ hai: 2 pins
      Tổng số điểm sẽ bằng: Frame 1: 10 + (10 + 4)= 24Frame 2: 10 + (4 + 2) = 16Frame 3: 4 + 2 = 6Tổng = 46Số điểm
      lớn nhất có thể ghi trong 1 frame là 30 điểm (trong đó 10 điểm cho quả Strike, đầu tiên cộng thêm số điểm của
      2 quả Strike liên 
      tiếp trong 2 frame tiếp theo).Khi ném được Strike ở frame số 10 (last frame), người chơi sẽ được thêm 1 lần 
      ném để có thể đạt điểm thưởng. Nếu 2 lần ném cuối cùng đểu là Strike, frame đó sẽ được tính tổng cộng là 
      30 điểm (10 + 10 + 10).
      Đây chỉ là điểm thưởng cho quả Strike đạt được ở frame cuối cùng, bản thân điểm đó không được tính.

      <b>Spare:</b> Người chơi sẽ được thưởng quả “Spare” khi ném đổ hết pin ở lần ném thứ 2, tức là ném đổ hết 10 
      pin sau hai lần ném.
      Đạt được Spare sẽ được thưởng 10 điểm cộng với điểm thưởng bằng số điểm bất kỳ ghi được ở lần ném tiếp theo 
      (Chỉ tính lần ném đầutiên)
      Ví dụ:
            Frame 1, lần ném thứ nhất: 7 pins
            Frame 1, lần ném thứ hai: 3 pins (Spare)
            Frame 2, lần ném thứ nhất: 4 pins
            Frame 2, lần ném thứ hai: 2 pins
            Tổng điểm đạt được sẽ là : 7 + 3 + 4(điểm thưởng) + 4 + 2 = 20
      Khi đạt Spare ở frame cuối cùng, người chơi sẽ được thêm một lần ném để có thể đạt điểm thưởng.

      Điểm tối đa có thể đạt được cho 1 game bowling 10 pin là 300 (12 Strikes – Perfect Game )
      
  - 4: String Caculators:
      Cộng các số trong chuỗi với nhau định dạng chuỗi: "1,2, ...." Cho phép có \n hay khoảng trắng ở trong chuỗi, nếu số lớn hơn 1000
        thì bỏ qua số đó, không cộng nó vào
