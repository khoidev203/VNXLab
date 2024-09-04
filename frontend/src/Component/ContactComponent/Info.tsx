import Email from "../../Assets/Images/Email.png"
import Address from "../../Assets/Images/Address.png"
import Clock from "../../Assets/Images/Clock.png"
const Info: React.FC = () => {
    return (
        <>
            <div className="contact-info">
                <div className="info-item">
                    <img src={Email} alt="" />
                    <h3>Số điện thoại &amp; Email</h3>
                    <p>+1-202-321-1211</p>
                    <p>+1-202-565-9133</p>
                    <p>hanoi-vietnam@gmail.com</p>
                </div>
                <div className="info-item address">
                <img src={Address} alt="" />
                    <h3>Address</h3>
                    <p>18 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                </div>
                <div className="info-item">
                <img src={Clock} alt="" />
                    <h3>Giờ mở cửa</h3>
                    <p>Thứ Hai - Thứ Sáu: 9 am - 5 pm</p>
                    <p>Thứ Bảy: 10 am - 3 pm</p>
                    <p>Chủ nhật: 10 am - 1 pm</p>
                </div>
            </div>

        </>
    )
}

export default Info