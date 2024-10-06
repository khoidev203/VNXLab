import { useState, useEffect } from 'react';
import axios from 'axios';

import po15 from "../../../Assets/Images/po15.png";
import po16 from "../../../Assets/Images/po16.png";
import po17 from "../../../Assets/Images/po17.png";
import po18 from "../../../Assets/Images/po18.png";

const sampleData = [
  {
    id: 1,
    title: "Welcome to Salon Emmeline",
    author: "Ciment",
    category: "Option 1",
    views: 12345,
    image: po15,
  },
  {
    id: 2,
    title: "A fresh take on hair",
    author: "Ciment",
    category: "Option 1",
    views: 12400,
    image: po16,
  },
  {
    id: 3,
    title: "Reseda",
    author: "Ciment",
    category: "Option 1",
    views: 12900,
    image: po17,
  },
  {
    id: 4,
    title: "Meet our new limited collection",
    author: "Ciment",
    category: "Option 1",
    views: 12800,
    image: po18,
  },
  {
    id: 5,
    title: "Welcome to Salon Emmeline",
    author: "Ciment",
    category: "Option 1",
    views: 12345,
    image: po15,
  },
  {
    id: 6,
    title: "A fresh take on hair",
    author: "Ciment",
    category: "Option 1",
    views: 12400,
    image: po16,
  },
  {
    id: 7,
    title: "Reseda",
    author: "Ciment",
    category: "Option 1",
    views: 12900,
    image: po17,
  },
  {
    id: 8,
    title: "Meet our new limited collection",
    author: "Ciment",
    category: "Option 1",
    views: 12800,
    image: po18,
  },
];

export const useContentMenuLogic = () => {
  const [selectedOption, setSelectedOption] = useState('1');
  const [visibleItems, setVisibleItems] = useState(6);
  const [searchTerm, setSearchTerm] = useState('');
  const [data, setData] = useState(sampleData);
  const [error, setError] = useState<string | null>(null);
  const itemsPerPage = 6;

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get('URL_API');
        if (response.data) {
          setData(response.data);
        }
      } catch (error) {
        console.error('Error fetching data from API:', error);
        // setError('Không thể lấy dữ liệu từ API. Đang dùng dữ liệu mẫu.');
      }
    };

    fetchData();
  }, []);

  const filteredData = data
    .filter(item => item.category === `Option ${selectedOption}`)
    .filter(item => item.title.toLowerCase().includes(searchTerm.toLowerCase()));

  const handleMenuClick = (e: any) => {
    setSelectedOption(e.key);
    setVisibleItems(itemsPerPage);
  };

  const loadMoreItems = () => {
    setVisibleItems(prevVisibleItems => Math.min(prevVisibleItems + itemsPerPage, filteredData.length));
  };

  return {
    selectedOption,
    visibleItems,
    searchTerm,
    setSearchTerm,
    data,
    filteredData,
    error,
    handleMenuClick,
    loadMoreItems,
    setSelectedOption,
    setVisibleItems,
  };
};
