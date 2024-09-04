import BannerImg from "../../../Assets/Images/Banner_IMG.png"
const BannerHome:React.FC = () => {
    return (
        <>
        <div id="banner">
            <div className="banner-wrapper">
                <div className="banner-text">
                    <h1>Tạo trang web danh mục đầu tư trực tuyến</h1>
                </div>
                <div className="banner-image">
                    <img src={BannerImg} alt="" />
                </div>
            </div>
        </div>
        </>
    )
}

export default BannerHome