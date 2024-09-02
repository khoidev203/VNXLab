import { FaGoogle } from "react-icons/fa";
import { FaApple } from "react-icons/fa";
import { FaFacebook } from "react-icons/fa";
const Register: React.FC = () => {
    return (
        <>
            <div className="login-container">
                <h1>Đăng Ký</h1>
                <div className="login-form">
                    <div className="left">
                        <form>
                            <label htmlFor="email">Email</label>
                            <input type="email" id="email" placeholder="email" required />
                            <label htmlFor="email">Username</label>
                            <input type="text" id="Username" placeholder="username" required />
                            <label htmlFor="password">Password</label>
                            <div className="password-wrapper">
                                <input type="password" id="password" placeholder="Password" required />
                                <span className="show-password">👁️</span>
                            </div>
                            <label htmlFor="password">Confirm Password</label>
                            <div className="password-wrapper">
                                <input type="password" id="password" placeholder="Password" required />
                                <span className="show-password">👁️</span>
                            </div>
                            <button type="submit" className="login-button">Đăng Ký</button>
                        </form>
                    </div>
                    <div className="divider">OR</div>
                    <div className="right">
                        <button className="social-login google"><FaGoogle size={20} /> Tiếp tục với Google</button>
                        <button className="social-login apple"><FaApple size={20} /> Tiếp tục với Apple</button>
                        <button className="social-login facebook"><FaFacebook size={20} />Tiếp tục với Facebook</button>
                    </div>
                </div>
            </div>

        </>
    )
}

export default Register