import HomeContact from "../../Component/HomeComponent/HomeContact"
import HomeContent from "../../Component/HomeComponent/HomeContent"
import HomeGallery from "../../Component/HomeComponent/HomeGallery"
import BannerHome from "../../Component/Layout/Banner/BannerHome"

const Home:React.FC = () => {
    return (
        <>
        <BannerHome />
        <HomeContent />
        <HomeGallery />
        <HomeContact />
        </>
    )
}

export default Home