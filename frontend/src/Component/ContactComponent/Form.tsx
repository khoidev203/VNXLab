const Form: React.FC = () => {
    return (
        <>
            <div className="contact-info-text">
                <h2>Liên Hệ Hỗ Trợ</h2>
                <p>Chúng tôi sẵn sàng trợ giúp bạn bất cứ lúc nào trên toàn thế giới, vì vậy đừng ngần ngại liên hệ với chúng tôi bất cứ lúc nào.</p>
            </div>
            <div className="contact-form">
                <h2>Gửi Tin Nhắn Cho Chúng Tôi</h2>
                <form>
                    <div className="form-layout">
                        <input type="text" placeholder="Tên" required />
                        <input type="email" placeholder="Email" required />
                    </div>
                    <div className="form-layout">
                        <input type="text" placeholder="Số điện thoại" required />
                        <input type="text" placeholder="Địa chỉ" required />
                    </div>
                    <textarea placeholder="Tin nhắn" required defaultValue={""} />
                    <button type="submit">Gửi</button>
                </form>
            </div>

        </>
    )
}

export default Form