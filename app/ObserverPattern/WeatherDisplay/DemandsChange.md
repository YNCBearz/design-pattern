# **觀察者模式 (Observer Pattern) - 天氣佈告欄**

### 需求紀錄：
1. 運用氣象站給的數據（濕度、溫度、氣壓），製作佈告欄，而當數據更新時，佈告欄需要同時更新顯示。
2. 技術主管認為我們：
    - 針對具體實現作編程，將來新增/刪除佈告欄時必須修改代碼
    - update所接的參數皆為濕度、溫度、氣壓，應該要有統一接口