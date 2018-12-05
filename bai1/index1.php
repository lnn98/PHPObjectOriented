<?php
/*
 * lập trình hướng đối tượng OPP
 * Ưu điểm của lập trình hướng đối tượng
 * Vì lập trình hướng đối tượng ra đời sau nên nó khắc phục được tất cả các điểm yếu    của các phương pháp lập trình trước đó. Cụ thể các ưu điểm sau
 * Dễ dàng quản lý code khi có sự thay đổi chương trình
 * Dễ mở rộng dự án
 * Tiết kiệm được tài nguyên đáng kể cho hệ thống
 * Có tính bảo mật cao
 * Có tính tái sử dụng cao
 * Như vậy trong phần này mình đã nêu ra được khái niệm của lập trình hướng đối tượng và ưu điểm của phương pháp lập trình hướng đối tượng rồi, Bài tiếp theo chúng ta sẽ đi vào tìm hiểu các khái niệm về class, thuộc tính, phương thức,...
 */
class Personnel {
    private $name = 'Vu Van A';
    private $age = 32;
    public function getPersonnel(){
        return $this->name .'-'. $this->age;
    }
}
$person = new Personnel();
echo $person->getPersonnel();