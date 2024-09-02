import ContentImg from "../../Assets/Images/Content_IMG.png"
import MainContent from "../../Assets/Images/Main_Content.png"
import ImgIconOne from "../../Assets/Images/Icon_1.png"
import ImgIconTwo from "../../Assets/Images/Icon_2.png"
import ImgIconThree from "../../Assets/Images/Icon_3.png"
import ImgIconFour from "../../Assets/Images/Icon_4.png"
import ImgIconFive from "../../Assets/Images/Icon_5.png"
import ImgIconSix from "../../Assets/Images/Icon_6.png"
import ImgIconSeven from "../../Assets/Images/Icon_7.png"
import ImgIconEight from "../../Assets/Images/Icon_8.png"
const HomeContent: React.FC = () => {
    return (
        <>
            <div id="content">
                <div className="content-wrapper">
                    <div className="content-layout">
                        <div className="content-img">
                            <img src={ContentImg} alt="" />
                        </div>
                        <div className="content-description">
                            <div className="content-description-row">
                                <h4>Tạo một trang web</h4>
                                <p>Các chiến dịch email mang thương hiệu và công cụ mạng xã hội giúp bạn dễ dàng giữ chân khách hàng và mở rộng cơ sở khách hàng.</p>
                            </div>
                            <div className="content-description-row">
                                <h4>Bán sản phẩm và dịch vụ của bạn</h4>
                                <p>Thiết lập cửa hàng thương mại điện tử, đặt lịch hẹn Thiết lập cửa hàng thương mại điện tử, đặt lịch hẹn hoặc bán kỹ năng của bạn - tất cả trên một nền tảng duy nhất được xây dựng dành riêng cho bạn.hoặc bán kỹ năng của bạn - tất cả trên một nền tảng duy nhất được xây dựng dành riêng cho bạn.</p>
                            </div>
                            <div className="content-description-row">
                                <h4>Tiếp thị doanh nghiệp của bạn</h4>
                                <p>Chọn bất kỳ mẫu trang web, phông chữ thiết kế và bảng màu hàng đầu nào trong ngành của chúng tôi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="main">
                <div className="main">
                    <div className="main-content-desc">
                        <h2>Tạo danh mục đầu tư trực tuyến</h2>
                        <p className="text-desc">Bắt đầu với mẫu thiết kế linh hoạt hoặc tự xây dựng mẫu, sau đó tùy chỉnh cho phù hợp với phong cách và nhu cầu chuyên môn của bạn bằng trình tạo trang web kéo và thả của chúng tôi.Trình bày tác phẩm của bạn là bước cuối cùng trong quy trình sản xuất của bạn. Chúng tôi đã làm việc chặt chẽ với hàng nghìn người sáng tạo để đảm bảo Fabrik thể hiện tác phẩm của bạn một cách tốt nhất. Xem cách chúng tôi thực hiện:</p>
                        <p> Bạn là người sáng tạo theo phong cách nào?</p>
                    </div>
                    <div className="main-content-img">
                        <img src={MainContent} alt="" />
                    </div>
                </div>
                <div className="main-content-layout">
                    <div className="main-layout">
                        <img src={ImgIconOne} alt="" />
                        <p>Nhà làm phim</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconTwo} alt="" />
                        <p>Nhà thiết kế</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconThree} alt="" />
                        <p>Poster</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconFour} alt="" />
                        <p>Nghệ sĩ 3D, CGI & VFX</p>
                    </div>
                </div>
                <div className="main-content-layout">
                    <div className="main-layout">
                        <img src={ImgIconFive} alt="" />
                        <p>Nhiếp ảnh gia</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconSix} alt="" />
                        <p>Cá nhân & CV</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconSeven} alt="" />
                        <p>Các khóa học</p>
                    </div>
                    <div className="main-layout">
                        <img src={ImgIconEight} alt="" />
                        <p>Nhà tạo mẫu & Người mẫu</p>
                    </div>
                </div>
            </div>
        </>
    )
}

export default HomeContent;