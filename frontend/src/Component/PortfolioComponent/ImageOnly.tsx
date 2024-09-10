import React from 'react';

import portfolio3 from "../../Assets/Images/po3.png";
import portfolio4 from "../../Assets/Images/po4.png";
import portfolio5 from "../../Assets/Images/po5.png";
import portfolio6 from "../../Assets/Images/po6.png";

const ImageOnly: React.FC = () => {
    return (
        <div className="imageOnly">
            <div className='hoverImage'>
                <img src={portfolio3} alt="Image 1" />
            </div>
            <div>
                <img src={portfolio4} alt="Image 2" />
            </div>
            <div>
                <img src={portfolio5} alt="Image 3" />
            </div>
            <div>
                <img src={portfolio6} alt="Image 4" />
            </div>
        </div>
    );
}

export default ImageOnly;