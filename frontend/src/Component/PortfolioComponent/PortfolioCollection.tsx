import React from 'react';
import portfolio1 from "../../Assets/Images/portfolio1.png"
import portfolio2 from "../../Assets/Images/portfolio2.png"

const PortfolioCollection: React.FC = () => {
  return (
    <div className="portfolio-collection">
      <div className="portfolio-item">
        <div className="image-container">
          <img src={portfolio1} alt="Portfolio Item" />
        </div>
        <div className="text-container">
          <h2>Bộ sưu tập tác phẩm</h2>
          <p>Tạo một trang web nhiều trang, đáp ứng đầy đủ để giới thiệu bản thân và công việc của bạn. Trang web của bạn sẽ bao gồm một bộ sưu tập và trang liên hệ để giúp bạn bắt đầu. Từ đó, bạn có thể sửa đổi theo ý muốn.</p>
        </div>
      </div>
      <div className="portfolio-item">
        <div className="image-container">
          <img src={portfolio2} alt="Portfolio Item" />
        </div>
        <div className="text-container">
          <h1>Trang chào mừng</h1>
          <p>Tạo một trang web đơn giản, đáp ứng đầy đủ. Lý tưởng cho trang đích cá nhân, danh thiếp kỹ thuật số hoặc trang chào mừng để bắt đầu một trang web lớn hơn. Bạn luôn có thể thêm các trang bổ sung nếu muốn.</p>
        </div>
      </div>
    </div>
  );
}

export default PortfolioCollection;