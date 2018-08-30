I.  Giới thiệu Git:
    https://blog.duyetdev.com/2015/04/git-va-cac-khai-niem-co-ban.html#.VyM70PmLTDc
    * Tóm tắt:
      - Git dùng để quản lý phiên bản code, rất thuận lợi trong làm việc nhóm thậm chí làm 1 mình.
        Git có nhiều trang hỗ trợ như: github.com, bitbucket.com, ... không phải git là chỉ riêng trang github, git giống như là 1 chuẩn
        quản lý phiên bản, ngoài ra còn có SVN là 1 chuẩn khác để quản lý phiên bản (theo cách hiểu của t).
      - Các khái niệm trong git:
        + Repository (kho): là thư mục. Thư mục trên github.com gọi là remote (xa) repository (kho), còn ở máy tính là local repository.
        + Branch (nhánh): ví dụ t làm 1 phần trên 1 nhánh, m rẽ sang nhánh khác làm chức năng khác, sau này hộp lại (merge)
        + Remote (máy chủ): khỏi giải thích, lát ví dụ
        + add (thêm): sau khi làm gì đó thay đổi thì add (thêm) cái thay đổi đó vào
        + commit: chốt thay đổi
        + pull (kéo về): lấy code của thằng làm chung đã push (đẩy) lên.
        + push (đẩy): đưa code lên remote repository, nghĩa là đẩy lên cho tụi kia kéo về
      - Ví dụ thực tế:
        + Tải git về cài vào máy: https://git-scm.com/
        + Tiếp là phải tạo 1 remote repository (thư mục trên github.com) đó là chỗ lúc push code sẽ lên, repository đó có 1 đừng dẫn, đuôi là *.git.
          ví du: https://github.com/Haosvit/QLPV.git. Việc tạo này phải tạo trên trang github.com, lên đó tìm nút tạo ("New repository").
        + Tạo 1 thư mục để chứa code dưới máy tính. Thư mục này sẽ liên kết với cái thư mục trên github sau này (làm theo các bước dưới)
        + Khởi tạo git trong thư mục mới tạo: Bấm chuột phải chọn "Git bash here" để mở màn hình console. Gõ: git init
        + Liên kết nó với thư mục ở github.com: cũng ở màn hình consolde mới mở lên, gõ: git remote add origin <đường dẫn tới thư mục trên github.com>
          ví dụ: git remote add origin https://github.com/Haosvit/QLPV.git
        + Sau khi liên kết 2 thư mục, lấy hết nội dung trên thư mục ở github về, trên console, gõ: git pull origin master
        + xong, đã lấy hết nội dung thư mục trên github về.
        + Khi làm gì đó thay đổi trên thư mục ở máy nhà, phải ADD sau đó COMMIT sau đó PUSH lên github. Làm như sau:
          ADD: mở git bash (màn hình console) lên, gõ: git add *
          COMMIT: cũng trên bash, gõ: git commit -m "nội dụng đã thực hiện"
                  trong đó cái trong dấu ngoặc kép là ghi chú của việc commit, cái này bắt buộc nhập
          PUSH: cũng trên bash, gõ: git push origin master
        + Khi ai đó push gì mới lên thì ở máy lấy về bằng cái: gõ trên bash tại thư mục đã khởi tạo git (git init): git pull origin master
        + Hết, luyện tập bằng cách tạo 1 repo trống trên github cá nhân.
