import React from 'react';

import portfolio7 from "../../Assets/Images/po7.png";
import portfolio8 from "../../Assets/Images/po8.png";

const TestPortfolio: React.FC = () => {
    return (
        <div className="containerTest">
            <div className="leftTest">
                <div className='textTest'>
                    <h2>Kiểm tra, quản lý và giao công việc cho khách hàng</h2>
                    <p>Hợp lý hóa quy trình làm việc của bạn và xây dựng mối quan hệ khách hàng bền chặt hơn. Làm việc trên các dự án, nhận phản hồi và giao công việc cho khách hàng trong một không gian thuận tiện. Quản lý mọi thứ một cách trơn tru và hiệu quả trong trang web danh mục nhiếp ảnh của bạn.</p>
                </div>
                <img src={portfolio7} alt="Image 1" />
            </div>
            <div className="rightTest">
                <div className='textTest'>
                    <h2>Thư viện được bảo vệ bằng mật khẩu</h2>
                    <p>Cho phép khách hàng của bạn xem các dự án khi chúng tiến triển với các thư viện được bảo vệ bằng mật khẩu. Cung cấp quyền truy cập tức thời, an toàn vào danh mục nhiếp ảnh của bạn mà không cần phải chuyển nội dung. Giữ cho công việc của bạn an toàn trong khi vẫn giữ cho khách hàng được cập nhật.</p>
                </div>
                <img src={portfolio8} alt="Image 2" />
            </div>
        </div>
    );
}

export default TestPortfolio;