import { FaGoogle } from "react-icons/fa";
import { FaApple } from "react-icons/fa";
import { FaFacebook } from "react-icons/fa";
import { Link } from "react-router-dom";
const ForgotPassword: React.FC = () => {
    return (
        <>
            <div className="login-container">
                <h1>Quên Mật Khẩu</h1>
                <div className="login-form">
                    <div className="left">
                        <form>
                            <label htmlFor="email">Email</label>
                            <input type="email" id="email" placeholder="name@example.com" required />
                            <button type="submit" className="login-button">Lấy lại mật khẩu</button>
                        </form>
                    </div>
                    <div className="divider">OR</div>
                    <div className="right">
                        <button className="social-login google"><FaGoogle size={20} /> Tiếp tục với Google</button>
                        <button className="social-login apple"><FaApple size={20} /> Tiếp tục với Apple</button>
                        <button className="social-login facebook"><FaFacebook size={20} />Tiếp tục với Facebook</button>
                    </div>
                </div>
                <div className="create-account">
                    <Link to={'/register'}>Tạo Tài Khoản</Link>
                </div>
            </div>
        </>
    )
}

export default ForgotPassword