# **設計模式**

| 模式 | 描述 |
| :-----| :---- |
| **策略模式 (Strategy Pattern)** | 定義算法族，分別封裝，讓彼此之間能互相替換，使**算法變化獨立**。 |
| **觀察者模式 (Observer Pattern)** | 在對象之間定義**一對多的依賴**。當一個對象改變狀態，依賴它的對象都會收到通知，並自動更新。 |
| **裝飾者模式 (Decorator Pattern)** | 動態地將責任附加到對象上。若要擴展功能，裝飾者提供了比繼承更有彈性的替代方案。 |
| **簡單工廠模式 (Simple Factory Pattern)** | 又稱為靜態工廠，傳入不同的參數以取得不同的類別物件。 |
| **工廠方法模式 (Factory Method Pattern)** | 簡單工廠的延伸，不再提供統一的工廠類來建立所有物件，而是將Factory類別抽象化，針對**不同分類的物件有不同的工廠**。 |
| | 也因此解決了簡單工廠新增Product時，違反OCP的問題。 |
| **抽象工廠模式 (Abstract Factory Pattern)** | 提供一個接口，用於創建相關或依賴對象的家族，而不需要明確指定具體類。即產品增加產品族的概念。 |
| | **工廠方法模式**利用**繼承**來創建對象，而**抽象工廠模式**則是利用**組合**。 |
| **單例模式 (Singleton Pattern)** | 確保一個類只有一個實例，並提供一個全局訪問點。 |
| **命令模式 (Command Pattern)** | 將請求封裝成對象，以便使用不同的請求、隊列或日誌來參數化其他對象。命令模式也支持可撤銷的操作。 |
| **樣板方法模式 (Template Method Pattern)**  | 在一個方法中定義一個算法的骨架，而將一些步驟延遲到子類中。 |
| **轉接頭模式 (Adapter Pattern)** | 將一個類的接口，轉換成客戶期望的另一個接口。轉接頭讓原本接口不兼容的類可以合作無間。 |
| **外觀模式 (Facade Pattern)** | 提供一個統一的接口，用來訪問子系統中的一群接口。外觀模式定義了一個高層接口，讓子系統更容易使用。 |
| **狀態模式 (State Pattern)** | 允許對象在內部狀態改變時，改變它的行為，對象看起來好像修改了它的類。 |
| **組合模式 (Composite Pattern)** | 允許將對象組合成**樹形結構**來表現**整體/部分**層次結構。組合能讓客戶以一致的方式處理個別對象以及對象組合。 |
| **迭代器模式 (Iterator Pattern)** | 提供一種方法**順序**訪問一個聚合對象中的各個元素，而又不暴露其內部的表示。 |
| **代理模式 (Proxy Pattern)** | 為另一個對象提供一個**替身**或**佔位符**以**控制這個對象的訪問**。 |
| **原型模式 (Prototype Pattern)** | 當創建實例的過程很昂貴或複雜時，透過**拷貝**這些原型來建立新的實例。 |
| **建造者模式 (Builder Pattern)** | 將複雜對象的構建與其表示**分離**。 |
| **備忘錄模式 (Memento Pattern)** | 透過**對象外**的**存檔**，讓對象能夠**載入之前的狀態**。 |
| **蠅量模式 (Flyweight Pattern)** | 於**相似**物件中**共享**儘可能多的資訊，進而減少記憶體使用量。 |

---

### **設計原則：**
1. 封裝變化。
2. 多用組合，少用繼承。
3. 針對接口編程，不針對實現編程。
4. 為交互對象之間的鬆耦合設計而努力。
5. 類應該對**擴展開放**、對**修改關閉**。
6. 要依賴抽象，不要依賴具體類。
7. 好萊塢原則：別調用（打電話給）我們，我們會調用（打電話給）你。

