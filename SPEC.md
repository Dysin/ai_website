# DJI-Style E-Commerce WordPress Theme - SPEC.md

## 1. Concept & Vision

一个基于WordPress的现代跨境电商独立站，设计风格参考DJI官方商店。整体风格简洁大气，以产品摄影为核心，通过精致的光影效果和流畅的交互动效营造高端科技感。适合无人机、相机、智能硬件等科技类产品销售。

## 2. Design Language

### Aesthetic Direction
参考DJI Store - 极简现代科技风，大量留白，突出产品本身。深色导航栏配浅色内容区，形成视觉对比。

### Color Palette
```css
:root {
  /* Primary Colors */
  --color-primary: #000000;        /* 导航栏、主要文字 */
  --color-primary-light: #1a1a1a;   /* 次级深色 */

  /* Accent */
  --color-accent: #ff6b35;         /* DJI橙色强调 */
  --color-accent-hover: #e55a2b;   /* 橙色悬停 */

  /* Backgrounds */
  --color-bg-primary: #ffffff;     /* 主背景 */
  --color-bg-secondary: #f7f7f7;    /* 次级背景 */
  --color-bg-dark: #0a0a0a;        /* 深色区块 */

  /* Text */
  --color-text-primary: #111111;   /* 主文字 */
  --color-text-secondary: #666666; /* 次级文字 */
  --color-text-muted: #999999;    /* 辅助文字 */
  --color-text-inverse: #ffffff;   /* 反色文字 */

  /* Functional */
  --color-success: #00a854;
  --color-error: #f5222d;
  --color-warning: #faad14;

  /* Borders */
  --color-border: #e5e5e5;
  --color-border-dark: #333333;
}
```

### Typography
- **主标题**: `'Inter', -apple-system, BlinkMacSystemFont, sans-serif` - 700 weight
- **副标题**: `'Inter', sans-serif` - 600 weight
- **正文**: `'Inter', sans-serif` - 400 weight
- **价格/数字**: `'DM Sans', sans-serif` - 700 weight

### Spatial System
- 基础单位: 8px
- 间距序列: 8, 16, 24, 32, 48, 64, 96, 128px
- 最大内容宽度: 1440px
- 卡片圆角: 12px
- 按钮圆角: 8px

### Motion Philosophy
- **导航**: 下拉菜单 200ms ease-out
- **卡片悬停**: transform scale(1.02) + shadow提升, 300ms ease
- **按钮**: background-color 150ms ease, transform scale(0.98) on click
- **页面加载**: 元素依次淡入，stagger 100ms
- **图片**: hover时subtle zoom scale(1.05), 500ms ease
- **滚动**: 导航栏滚动后添加背景模糊效果

### Visual Assets
- **图标**: Lucide Icons (线条风格, stroke-width: 1.5)
- **产品图片**: 高质量白底产品图，aspect-ratio 1:1 或 4:3
- **装饰元素**: 渐变光晕、几何线条、微妙的网格背景

## 3. Layout & Structure

### Page Structure

```
┌─────────────────────────────────────────────────────┐
│  Top Bar (Currency/Language - 仅在首屏显示)          │
├─────────────────────────────────────────────────────┤
│  Header (Logo | Nav | Search | Account | Cart)      │
│  固定定位，滚动时添加背景模糊                         │
├─────────────────────────────────────────────────────┤
│  Hero Section (全屏轮播 banner)                      │
├─────────────────────────────────────────────────────┤
│  Category Icons Grid (产品分类图标)                  │
├─────────────────────────────────────────────────────┤
│  Featured Products Section                           │
│  (4列产品卡片网格)                                   │
├─────────────────────────────────────────────────────┤
│  Promotional Banner (横向大图促销)                   │
├─────────────────────────────────────────────────────┤
│  Product Tabs/Categories Section                     │
│  (标签页切换不同产品分类)                            │
├─────────────────────────────────────────────────────┤
│  Features Grid (产品特性)                            │
├─────────────────────────────────────────────────────┤
│  Footer (Links | Newsletter | Social | Copyright)    │
└─────────────────────────────────────────────────────┘
```

### Responsive Strategy
- **Desktop**: 1440px+ (4列产品网格)
- **Laptop**: 1024px-1439px (4列)
- **Tablet**: 768px-1023px (2-3列)
- **Mobile**: <768px (单列，汉堡菜单)

### Visual Pacing
- Hero区域占据首屏100vh或80vh
- 各section之间用96px间距
- 产品网格用32px间距
- 充足的内边距保持呼吸感

## 4. Features & Interactions

### Core Features

#### 4.1 导航系统
- **Logo**: 左侧，点击返回首页
- **主导航**: 居中，产品分类下拉
  - 下拉菜单显示子分类和特色产品
  - 悬停时显示，带smooth动画
- **搜索**: 图标点击展开搜索栏
  - 支持实时搜索建议
  - ESC或点击外部关闭
- **用户账户**: 登录/注册/账户管理
- **购物车**: 数量badge显示

#### 4.2 Hero轮播
- 全宽轮播，5-6张幻灯片
- 自动播放(5秒间隔)，支持手势滑动
- 底部指示点 + 左右箭头
- 促销信息叠加在图片上
- 移动端可触摸滑动

#### 4.3 产品分类网格
- 圆形图标 + 分类名称
- 悬停时图标放大 + 颜色变化
- 常见分类: 无人机、手持设备、相机、教育机器人、配件

#### 4.4 产品卡片
- 产品图片(hover时subtle zoom)
- 产品名称
- 简短描述
- 价格(原价的删除线 + 促销价)
- "立即购买"按钮
- 折扣badge(可选)
- 悬停: 卡片微微上浮 + 阴影加深

#### 4.5 产品详情页
- 大图画廊(支持缩放)
- 产品信息(名称、描述、价格)
- 规格参数表格
- 购买按钮 + 数量选择
- 相关产品推荐

#### 4.6 购物车
- 侧边栏滑出
- 商品列表(图片、名称、数量、价格)
- 数量加减按钮
- 移除商品
- 小计 + 总计
- 去结算按钮

#### 4.7 页脚
- 4列布局: 公司信息、快速链接、客户关怀、订阅通讯
- 社交媒体图标
- 支付方式图标
- 版权信息
- 备案号(中国跨境电商需要)

### Edge Cases & States
- **空购物车**: 展示空状态插图 + "开始购物"按钮
- **加载中**: Skeleton骨架屏
- **搜索无结果**: 友好提示 + 推荐分类
- **产品缺货**: 灰度显示 + "到货通知"按钮

## 5. Component Inventory

### 5.1 Header
- **Default**: 透明背景，浅色文字(在Hero上)
- **Scrolled**: 白色背景，深色文字，阴影
- **Mobile**: 汉堡菜单图标

### 5.2 Navigation Item
- **Default**: 文字颜色
- **Hover**: 橙色下划线动画
- **Active**: 橙色下划线保持

### 5.3 Button - Primary
- **Default**: 橙色背景，白色文字
- **Hover**: 深橙色背景
- **Active**: 略微缩小
- **Disabled**: 灰色背景，不可点击

### 5.4 Button - Secondary
- **Default**: 透明背景，橙色边框，橙色文字
- **Hover**: 橙色背景，白色文字
- **Active**: 略微缩小

### 5.5 Product Card
- **Default**: 白色背景，轻微阴影
- **Hover**: 上浮4px，阴影加深，图片微缩放
- **Loading**: Skeleton动画

### 5.6 Input Field
- **Default**: 灰色边框
- **Focus**: 橙色边框，轻微阴影
- **Error**: 红色边框，错误提示文字
- **Disabled**: 灰色背景

### 5.7 Badge
- **Discount**: 红色背景，白色文字
- **New**: 黑色背景，白色文字
- **Hot**: 橙色背景，白色文字

## 6. Technical Approach

### Framework
- **WordPress Theme**: 手动创建的WordPress主题(不使用页面构建器)
- **Parent/Child Theme Structure**: 便于后续更新
- **CSS**: 原生CSS + CSS Variables
- **JavaScript**: 原生JS，无jQuery依赖
- **Icons**: Lucide Icons (SVG inline)

### Architecture
```
/ai_website/
├── .git/
├── .claude/
│   └── progress.json          # 进度追踪
├── wp-content/
│   └── themes/
│       └── dji-store-theme/   # 主題目录
│           ├── style.css
│           ├── functions.php
│           ├── header.php
│           ├── footer.php
│           ├── front-page.php
│           ├── single-product.php
│           ├── archive-product.php
│           ├── page.php
│           ├── css/
│           │   └── custom.css
│           ├── js/
│           │   └── main.js
│           └── assets/
│               ├── images/
│               └── icons/
├── SPEC.md
└── README.md
```

### WordPress Features
- **Custom Post Type**: 产品 (product)
- **Custom Taxonomy**: 产品分类 (product_category)
- **Custom Meta Boxes**: 价格、SKU、库存
- **WooCommerce Integration**: 可选的电商功能
- **Customizer API**: Logo、颜色、Hero图片

### Performance Considerations
- 图片懒加载
- CSS/JS最小化
- 关键CSS内联
- 字体预加载
- HTTP/2优化

## 7. Implementation Phases

### Phase 1: 基础设置 (当前)
- [x] SPEC.md规范文档
- [ ] WordPress主题基础结构
- [ ] Git仓库初始化
- [ ] 基础CSS框架和变量

### Phase 2: 前端界面
- [ ] Header和导航组件
- [ ] Hero轮播组件
- [ ] 产品分类网格
- [ ] 产品卡片组件
- [ ] Footer组件

### Phase 3: 页面模板
- [ ] 首页模板
- [ ] 产品列表页
- [ ] 产品详情页
- [ ] 购物车页面

### Phase 4: 电商功能
- [ ] WooCommerce集成
- [ ] 产品自定义字段
- [ ] 购物车功能
- [ ] 结账流程

### Phase 5: 优化与测试
- [ ] 响应式测试
- [ ] 性能优化
- [ ] 跨浏览器测试
- [ ] 文档完善
