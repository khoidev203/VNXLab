import React from 'react';

import check from "../../Assets/Images/check_square.png";
import message from "../../Assets/Images/message_square.png";
import imggg from "../../Assets/Images/imggggg.png";

const MorePortfolio: React.FC = () => {
    return (
        <div className="containerMore">
            <h1>Và nhiều hơn nữa...</h1>
            <div className='contentMore'>
                <div className='itemContentMore'>
                    <div>
                        <img src={check} alt="Image 1" />
                        <h4>Theo dõi mục yêu thích của khách hàng</h4>
                    </div>
                    <div>
                        <p>Nhận thông báo về các mặt hàng mà khách hàng của bạn đã đánh dấu là yêu thích từ bất kỳ thư viện hoặc bộ sưu tập nào.</p>
                    </div>
                </div>
                <div className='itemContentMore'>
                    <div>
                        <img src={message} alt="Image 1" />
                        <h4>Xem lại phản hồi của khách hàng</h4>
                    </div>
                    <div>
                        <p>Cho phép khách hàng để lại bình luận về tác phẩm của bạn trên trang web danh mục nhiếp ảnh của bạn. Sử dụng phản hồi của họ để liên tục cải thiện và phấn đấu đạt đến sự xuất sắc.</p>
                    </div>
                </div>
                <div className='itemContentMore'>
                    <div>
                        <img src={imggg} alt="Image 1" />
                        <h4>Đóng dấu bản quyền hình ảnh của bạn</h4>
                    </div>
                    <div>
                        <p>Không bao giờ phải lo lắng về việc sử dụng trái phép các tác phẩm sáng tạo của bạn nữa, nhờ tính năng đóng dấu bản quyền của Portfoliobox</p>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default MorePortfolio;
