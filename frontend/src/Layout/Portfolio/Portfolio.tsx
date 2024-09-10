
import Form from "../../Component/ContactComponent/Form"
import BannerHome from "../../Component/Layout/Banner/BannerHome"
import DesignerPortfolio from "../../Component/PortfolioComponent/DesignerPortfolio"
import ImageOnly from "../../Component/PortfolioComponent/ImageOnly"
import MorePortfolio from "../../Component/PortfolioComponent/MorePortfolio"
import PortfolioCollection from "../../Component/PortfolioComponent/PortfolioCollection"
import TestPortfolio from "../../Component/PortfolioComponent/TestPortfolio"
import TextGallery from "../../Component/PortfolioComponent/TextGallery"
import TextOnly from "../../Component/PortfolioComponent/TextOnly"


const Portfolio:React.FC = () => {
    return (
        <>
            <BannerHome />
            <TextOnly />
            <PortfolioCollection />
            <TextGallery />
            <ImageOnly />
            <TestPortfolio />
            <MorePortfolio />
            <DesignerPortfolio />
            <Form />
        </>
    )
}

export default Portfolio