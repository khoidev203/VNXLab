import { FaGoogle } from "react-icons/fa";
import { FaApple } from "react-icons/fa";
import { FaFacebook } from "react-icons/fa";
import { Link } from "react-router-dom";
const Login: React.FC = () => {
    return (
        <>
            <div className="login-container">
                <h1>Đăng Nhập</h1>
                <div className="login-form">
                    <div className="left">
                        <form>
                            <label htmlFor="email">Email</label>
                            <input type="email" id="email" placeholder="name@example.com" required />
                            <label htmlFor="password">Password</label>
                            <div className="password-wrapper">
                                <input type="password" id="password" placeholder="Password" required />
                                <span className="show-password">👁️</span>
                            </div>
                            <div className="forgot-password">
                                <Link to={'/forgot-password'}>Quên Mật Khẩu</Link>
                            </div>
                            <button type="submit" className="login-button">ĐĂNG NHẬP</button>
                        </form>
                    </div>
                    <div className="divider">OR</div>
                    <div className="right">
                        <button className="social-login google"><FaGoogle size={20}/> Tiếp tục với Google</button>
                        <button className="social-login apple"><FaApple size={20}/> Tiếp tục với Apple</button>
                        <button className="social-login facebook"><FaFacebook size={20}/>Tiếp tục với Facebook</button>
                    </div>
                </div>
                <div className="create-account">
                    <Link to={'/register'}>Tạo Tài Khoản</Link>
                </div>
            </div>

        </>
    )
}

export default Login