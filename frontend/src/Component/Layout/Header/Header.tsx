import { Logo } from "src/Assets/image"


const Header: React.FC = () => {
    return (
        <>
            <div id="header">
                <header>
                    <div className="header_main">
                        <div className="header_logo">
                            <img src={Logo} alt="" />
                        </div>
                    </div>
                </header>
            </div>
        </>
    )
}
export default Header