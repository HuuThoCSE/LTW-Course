
## Nhận số không âm?
### Cách 1: Dùng hàm
```javascript
const dongia = document.getElementById('Dongia').value;

// Kiem tra Don gia
if (isNaN(dongia) || dongia < 0){ 
    alert("Đơn giá phải là số không âm");
    return false;
}
```

### Cách 2: Dùng min trong thẻ html của input
```
min='0'
```


## Giớ hạn ngày
### Cách 1: Dùng hàm
```javascript
const hansd = document.getElementById('HanSD').value;
const today = new Date().toLocaleDateString('vi').split('T')[0];

// Kiểm tra hạn sử dụng
if(hansd < today){
    alert("Hạn sử dụng không được nhỏ hơn ngày hiện tại.");
    return false;
}
```

### cách 2: chỉnh lại input giới hạn min
```javascript
document.querySelector('[name="HanSD"]').min = new Date().toISOString().split('T')[0];
```