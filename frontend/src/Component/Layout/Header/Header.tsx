import { Link } from "react-router-dom"
import Logo from "../../../Assets/Images/Logo.png"
import { CiUser } from "react-icons/ci";
import { CiSearch } from "react-icons/ci";

const Header: React.FC = () => {
    return (
        <>
            <div id="header">
                <header>
                    <div className="header-main">
                        <div className="header-logo">
                            <img src={Logo} alt="" />
                        </div>
                        <div className="header-nav">
                            <ul className="nav-item">
                                <li className="nav-list-item">
                                    <Link to={"/"}>Trang Chủ</Link>
                                </li>
                                <li className="nav-list-item">
                                    <Link to={"/"}>Sản Phẩm Nghiên Cứu</Link>
                                </li>
                                <li className="nav-list-item">
                                    <Link to={"/portfolio"}>Portfolio</Link>
                                </li>
                                <li className="nav-list-item">
                                    <Link to={"/contact"}>Liên Hệ</Link>
                                </li>
                            </ul>
                        </div>
                        <div className="header-icon">
                            <form className="max-w-md mx-auto">
                                <CiSearch size={25} />
                            </form>
                            <div className="user">
                                <Link to={"/login"}><CiUser size={23} /></Link>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </>
    )
}
export default Header