
import React from 'react';

import po10 from "../../Assets/Images/po10.png";
import po11 from "../../Assets/Images/po11.png";
import po12 from "../../Assets/Images/po12.png";
import po13 from "../../Assets/Images/po13.png";

const DesignerPortfolio: React.FC = () => {
    return (
        <div className='containerDesigner'>
            <div className='itemDesigner'>
                <img src={po10} alt="Image 1" />
                <div>
                    <h4>Nhà thiết kế đồ họa</h4>
                    <p>Tôi tập trung vào bản sắc trực quan với các chủ đề cốt lõi xoay quanh thương hiệu, hệ thống chỉ đường, ấn phẩm và thiết kế bao bì"</p>
                </div>
            </div>
            <div className='itemDesigner'>
                <img src={po11} alt="Image 1" />
                <div>
                    <h4>Nghệ sĩ thị giác</h4>
                    <p>Những biểu cảm trực quan của Carlota chịu ảnh hưởng bởi những điều bí ẩn trong sự tồn tại của chúng ta và cách mọi hành động, cảm xúc và sự kết nối của chúng ta trên quy mô toàn cầu tạo nên một chuỗi phản ứng."</p>
                </div>
            </div>
            <div className='itemDesigner'>
                <img src={po12} alt="Image 1" />
                <div>
                    <h4>Nghệ sĩ thị giác</h4>
                    <p>Những biểu cảm trực quan của Carlota chịu ảnh hưởng bởi những điều bí ẩn trong sự tồn tại của chúng ta và cách mọi hành động, cảm xúc và sự kết nối của chúng ta trên quy mô toàn cầu tạo nên một chuỗi phản ứng."</p>
                </div>
            </div>
            <div className='itemDesigner'>
                <img src={po13} alt="Image 1" />
                <div>
                    <h4>Diễn viên múa ba lê / Nhiếp ảnh gia</h4>
                    <p>Mathieu cho thấy mọi khía cạnh của một vũ công ballet: kỹ thuật, thể chất, nghệ sĩ đằng sau vũ công và cốt truyện cũng như ý nghĩa của vũ đạo được trình diễn."</p>
                </div>
            </div>
        </div>
    )
}

export default DesignerPortfolio;

