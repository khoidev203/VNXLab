import BannerHome from "../../Component/Layout/Banner/BannerHome"
import BuildTemplate from "../../Component/ProductResearchComponent/BuildTemplate"
import ContentPR from "../../Component/ProductResearchComponent/contentMenu/ContentPR"
import FindDesigner from "../../Component/ProductResearchComponent/FindDesigner"

const ProductResearch:React.FC = () => {
    return (
        <>
            <BannerHome />
            <ContentPR />
            <BuildTemplate />
            <FindDesigner />
        </>
    )
}

export default ProductResearch