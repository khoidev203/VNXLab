import Contact from "../../Assets/Images/Contact.png"
const HomeContact:React.FC = () => {
    return (
        <>
        <div id="contact">
            <div className="contact">
                <div className="contact-layout">
                    <div className="contact-layout-desc">
                        <h2>Mẫu trang web cho mọi mục đích</h2>
                        <ul>
                            <li>Nhà làm phim</li>
                            <li>Nhiếp ảnh gia</li>
                            <li>Nhà thiết kế</li>
                            <li>Nghệ sĩ 3D, CGI & VFX</li>
                            <li>Nhà tạo mẫu & Người mẫu</li>
                            <li>Cá nhân & CV</li>
                            <li>Poster</li>
                            <li>Các khóa học</li>
                        </ul>
                    </div>
                    <div className="contact-layout-form">
                        <p>Bắt đầu với mẫu thiết kế linh hoạt hoặc tự xây dựng mẫu, sau đó tùy chỉnh cho phù hợp với phong cách và nhu cầu chuyên môn của bạn bằng trình tạo trang web kéo và thả của chúng tôi.</p>
                        <form action="" method="post">
                            <input type="text" placeholder="Khám phá tất cả các mẫu " />
                        </form>
                        <img src={Contact} alt="" />
                    </div>
                </div>
            </div>
        </div>
        </>
    )
}

export default HomeContact