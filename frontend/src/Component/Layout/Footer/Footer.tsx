import Logo from "../../../Assets/Images/Logo_01.png"
const Footer: React.FC = () => {
    return (
        <>
            <footer>
                <div id="footer">
                    <div className="footer-main">
                        <div className="footer-image">
                            <img src={Logo} alt="" />
                        </div>
                        <div className="footer-column">
                            <ul className="footer-item">
                                <li>Themes</li>
                                <li>Pricing</li>
                                <li>Feature List</li>
                                <li>Feature List</li>
                                <li>Help & Support</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                        <div className="footer-column">
                            <ul className="footer-item">
                                <li>Filmmakers</li>
                                <li>Photographers</li>
                                <li>Artists</li>
                                <li>Designers</li>
                                <li>Illustrators</li>
                                <li>3D, CGI & VFX Artists</li>
                                <li>Agencies & Studios</li>
                                <li>Stylists & Models</li>
                            </ul>
                        </div>
                        <div className="footer-column">
                            <ul className="footer-item">
                                <li>Fabrik Heroes</li>
                                <li>Showcase</li>
                                <li>Maker Series</li>
                                <li>Learning</li>
                                <li>About Fabrik</li>
                                <li>Terms of Service</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                        <div className="footer-column">
                            <ul className="footer-item">
                                <li>Instagram</li>
                                <li>Twitter</li>
                                <li>LinkedIn</li>
                                <li>Ello</li>
                                <li>Pinterest</li>
                                <li>Facebook</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </>
    )
}

export default Footer