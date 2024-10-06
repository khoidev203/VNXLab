import React from 'react';
import {
  AppstoreOutlined,
  ContainerOutlined,
  DesktopOutlined,
  MailOutlined,
  PieChartOutlined,
  CameraOutlined,
} from '@ant-design/icons';
import { Menu } from 'antd';
import type { MenuProps } from 'antd';
import views from "../../../Assets/Images/views.png";
import { useContentMenuLogic } from './useContentMenuLogic';

type MenuItem = Required<MenuProps>['items'][number];

const items: MenuItem[] = [
  {
    key: 'grp1',
    label: 'Lọc theo chủ đề',
    type: 'group',
    children: [
      { key: '1', icon: <PieChartOutlined />, label: 'Tất cả các mẫu' },
      { key: '2', icon: <CameraOutlined />, label: 'Nhiếp ảnh' },
      { key: '3', icon: <ContainerOutlined />, label: 'Thời trang' },
      { key: '4', icon: <MailOutlined />, label: 'Sự giải trí' },
      { key: '5', icon: <AppstoreOutlined />, label: 'Nghệ thuật & thiết kế' },
    ],
  },
  {
    key: 'grp2',
    label: 'Lọc theo tác giả',
    type: 'group',
    children: [
      { key: '6', icon: <PieChartOutlined />, label: 'Tất cả các mẫu' },
      { key: '7', icon: <DesktopOutlined />, label: 'Nhiếp ảnh' },
      { key: '8', icon: <ContainerOutlined />, label: 'Thời trang' },
      { key: '9', icon: <MailOutlined />, label: 'Sự giải trí' },
      { key: '10', icon: <AppstoreOutlined />, label: 'Nghệ thuật & thiết kế' },
    ],
  },
];

const ContentMenuPR: React.FC = () => {
  const {
    selectedOption,
    searchTerm,
    setSearchTerm,
    filteredData,
    visibleItems,
    error,
    handleMenuClick,
    loadMoreItems,
  } = useContentMenuLogic();

  return (
    <div className="containerCT">
      <div className="menu-wrapper">
        <div className="search-box">
          <input
            type="text"
            placeholder="Tìm kiếm..."
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
          />
        </div>
        <Menu
          selectedKeys={[selectedOption]}
          mode="inline"
          theme="light"
          items={items}
          onClick={handleMenuClick}
        />
      </div>
  
      <div className="product-list">
        {error && <p>{error}</p>}
  
        {filteredData.length === 0 ? (
          <p>Không có dữ liệu cần tìm</p>
        ) : (
          filteredData.slice(0, visibleItems).map(item => (
            <div key={item.id} className="product-item">
              <img src={item.image} alt={item.title} />
              <div className="textContainer">
                <div className="itemText">
                  <p>{item.author}</p>
                  <div className='viewContainer'>
                    <img id='imgViews' src={views} alt="" />
                    <p>{item.views} Nghìn</p>
                  </div>
                </div>
              </div>
            </div>
          ))
        )}
  
        {visibleItems < filteredData.length && (
          <div className="load-more-container">
            <span className="load-more-text" onClick={loadMoreItems}>
              Load more
            </span>
          </div>
        )}
      </div>
    </div>
  );  
};

export default ContentMenuPR;
