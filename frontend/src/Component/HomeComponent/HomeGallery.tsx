import GalleryOne from "../../Assets/Images/Gallery.png"
import GalleryTwo from "../../Assets/Images/Gallery_01.png"
import GalleryThree from "../../Assets/Images/Gallery_02.png"
import GalleryFour from "../../Assets/Images/Gallery_03.png"
import GalleryFive from "../../Assets/Images/Gallery_04.png"
import GallerySix from "../../Assets/Images/Gallery_05.png"
import GallerySeven from "../../Assets/Images/Gallery_06.png"
import GalleryEight from "../../Assets/Images/Gallery_07.png"
const HomeGallery: React.FC = () => {
    return (
        <>
            <div id="gallery">
                <div className="gallery">
                    <div className="gallery-item">
                        <img src={GalleryOne} alt="Adi Halfin" />
                        <div className="description">
                            <h2>Adi Halfin</h2>
                            <p>Đạo diễn</p>
                            <p>Radiohead (True Love Waits)</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GalleryTwo} alt="Luis Monteiro" />
                        <div className="description">
                            <h2>Luis Monteiro</h2>
                            <p>Nhiếp ảnh gia</p>
                            <p>Harpers Bazaar</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GalleryThree} alt="David Vanadia" />
                        <div className="description">
                            <h2>David Vanadia</h2>
                            <p>Minh họa</p>
                            <p>Main et Corps</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GalleryFour} alt="Iness Rychlik" />
                        <div className="description">
                            <h2>Iness Rychlik</h2>
                            <p>Nhiếp ảnh gia</p>
                            <p>Sự thức tỉnh</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GalleryFive} alt="Luis Monteiro" />
                        <div className="description">
                            <h2>Luis Monteiro</h2>
                            <p>Nhiếp ảnh gia</p>
                            <p>Harpers Bazaar</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GallerySix} alt="David Vanadia" />
                        <div className="description">
                            <h2>David Vanadia</h2>
                            <p>Minh họa</p>
                            <p>Main et Corps</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GallerySeven} alt="David Vanadia" />
                        <div className="description">
                            <h2>David Vanadia</h2>
                            <p>Minh họa</p>
                            <p>Main et Corps</p>
                        </div>
                    </div>
                    <div className="gallery-item">
                        <img src={GalleryEight} alt="David Vanadia" />
                        <div className="description">
                            <h2>David Vanadia</h2>
                            <p>Minh họa</p>
                            <p>Main et Corps</p>
                        </div>
                    </div>
                </div>
                <div className="gallery">
               
                </div>
            </div>
        </>
    )
}
export default HomeGallery