import React from 'react';

import po14 from "../../Assets/Images/po14.png";

const BuildTemplate: React.FC = () => {
    return (
        <div className='containerBT'>
            <div className='rightBT'>
                <h2>Xây dựng mẫu của riêng bạn</h2>
                <p>Chọn từ các màu sắc, phông chữ và bố cục trang được tuyển chọn chuyên nghiệp để tạo mẫu trang web phù hợp với tầm nhìn của bạn với Squarespace Blueprint AI.</p>
                <div className='divBTN'>
                    <button className='btnStart'>Bắt đầu</button>
                </div>
            </div>
            <div className='leftBT'>
                <img src={po14} alt="" />
            </div>
        </div>
    )
}

export default BuildTemplate